<?php

namespace App\Services;

use App\Jobs\FetchPayData;

class ImportService
{
    /**
     * Handle importing payments data
     *
     * @return void
     */
    public function index()
    {
        if (FetchPayData::dispatch()) {
            return response('success', 202);
        }
        return response('failure', 400);
    }
}
