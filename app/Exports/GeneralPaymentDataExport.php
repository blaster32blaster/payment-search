<?php

namespace App\Exports;

use App\GeneralPaymentData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;

class GeneralPaymentDataExport implements FromCollection
{
    /**
     * the search data
     *
     * @var string $searchData
     */
    private $searchData;

    public function __construct(Request $searchData)
    {
        $this->searchData = $searchData->get('searchstring');
    }

    /**
    * return general payment data export
    *
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $testCollect = GeneralPaymentData::search(
            $this->searchData
        )
            // ->where('Applicable_Manufacturer_or_Payment_Name', $this->searchData)
            ->get();

        logger()->error('got teh collect');
        logger()->error($testCollect);
        return $testCollect;
    }
}
