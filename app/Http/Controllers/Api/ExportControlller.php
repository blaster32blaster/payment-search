<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ExportService;
use Illuminate\Http\Request;

/**
 * controller to handle routing for exporting
 */
class ExportController extends Controller
{
    /**
     * ExportService instance
     *
     * @var ExportService $exportService
     */
    private $exportService;

    public function __construct(ExportService $es)
    {
        $this->exportService = $es;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->exportService->store($request);
    }
}
