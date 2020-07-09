<?php

namespace App\Services;

use App\Exports\GeneralPaymentDataExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

/**
 * handle exporting data to the user
 */
class ExportService
{
    /**
     * get an export rtequest
     *
     * @param Request $exportRequest
     * @return void
     */
    public function store(Request $exportRequest)
    {
        return Excel::download(new GeneralPaymentDataExport($exportRequest), 'paymentdata.xlsx');
    }
}
