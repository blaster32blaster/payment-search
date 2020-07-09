<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\SearchService;
use Illuminate\Http\Request;

/**
 * controller for routing search requests
 */
class SearchController extends Controller
{
    /**
     * SearchService instance
     *
     * @var SearchService $searchService
     */
    private $searchService;

    public function __construct(SearchService $ss)
    {
        $this->searchService = $ss;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->searchService->store($request);
    }
}
