<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Show the Dashboard.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(): View
    {
        return view('dashboard.index');
    }
}
