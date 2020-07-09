<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\DashboardService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * a dashboard service instance
     *
     * @var DashboardService $dashboardService
     */
    private $dashboardService;

    public function __construct(DashboardService $ds)
    {
        $this->dashboardService = $ds;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->dashboardService->index();
    }
}
