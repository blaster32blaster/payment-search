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
        return GeneralPaymentData::search(
            $this->searchData
        )
            ->get();
    }
}
