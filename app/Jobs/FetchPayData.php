<?php

namespace App\Jobs;

use App\Events\TestEvent;
use App\Imports\GeneralPaymentDataImport;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Boolean;

class FetchPayData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $endpoint;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = config('paydata.data_enpoint');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!$this->importData()) {
            event(new TestEvent('data download error'));
            return;
        }

        if (!$this->saveDataToDatabase()) {
            event(new TestEvent('data download error'));
            return;
        }

        event(new TestEvent('importSuccess'));
    }

    /**
     * import data from source and save to filesystem
     *
     * @return boolean
     */
    private function importData() : bool
    {
        // really big dataset
        // $testEndpoint = 'https://openpaymentsdata.cms.gov/api/views/p2ve-2ws5/rows.csv?accessType=DOWNLOAD';
        // reasonable sized dataset
        $testEndpoint = 'https://openpaymentsdata.cms.gov/resource/p2ve-2ws5.csv?%24where=(teaching_hospital_ccn%20%3D%20%27440039%27)&%24order=total_amount_of_payment_usdollars%20DESC';

        try {
            $client = new Client();
            $response = $client->request('GET', $testEndpoint, [
            ]);

            Storage::disk('local')->put('download.csv', $response->getBody()->getContents());
        } catch (Exception $e) {
            logger()->error('error fetching data general exception', [
                'data_import_error' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
                ]);
            return false;
        }
        return true;
    }

    /**
     * save downloaded data to database for querying
     *
     * @return boolean
     */
    private function saveDataToDatabase() : bool
    {
        try {
            $file =  Storage::disk('local')->get('download.csv');
            // import the data into the db
            Excel::import(new GeneralPaymentDataImport, 'download.csv');

        } catch (Exception $e) {
            logger()->error('error saving data general exception', [
                'data_import_error' => $e->getMessage(),
                'stack' => $e->getTraceAsString()
                ]);
            return false;
        }
        return true;
    }
}
