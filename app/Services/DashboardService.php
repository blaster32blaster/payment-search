<?php

namespace App\Services;

use Illuminate\Http\Response;
use Illuminate\View\View;

/**
 * the class for handling dashboard interactions
 */
class DashboardService
{
    /**
     * the index method for the dashboard
     *
     * @return View
     */
    public function index() : View
    {
        return view('dashboard')->with('title', 'Payment Data Search');
    }
}
