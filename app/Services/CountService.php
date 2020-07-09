<?php

namespace App\Services;

use App\GeneralPaymentData;
use Illuminate\Http\Response;

/**
 * the class for handling dashboard interactions
 */
class CountService
{
    /**
     * the index method for the record count
     *
     * @return Response
     */
    public function index() : Response
    {
        return response(GeneralPaymentData::count());
    }
}
