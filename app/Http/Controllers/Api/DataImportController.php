<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ImportService;

/**
 * handle importing payments data
 */
class DataImportController extends Controller
{
    /**
     * an import service instance
     *
     * @var ImportService $importService
     */
    private $importService;

    public function __construct(ImportService $is)
    {
        $this->importService = $is;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->importService->index();
    }
}
