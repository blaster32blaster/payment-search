<?php

namespace App\Services;

use App\GeneralPaymentData;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

/**
 * class for handling searching
 */
class SearchService
{
    /**
     * handle a search request
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $searchRequest) : Response
    {
        return response(GeneralPaymentData::search($searchRequest->get('searchstring'))
            ->get()
            ->pluck('Submitting_Applicable_Manufacturer_GPO_Name')
        );
    }
}
