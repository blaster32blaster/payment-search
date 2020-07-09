<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CountService;

class CountController extends Controller
{
    /**
     * a count service instance
     *
     * @var CountService $countService
     */
    private $countService;

    public function __construct(CountService $cs)
    {
        $this->countService = $cs;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->countService->index();
    }
}
