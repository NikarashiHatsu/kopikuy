<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Show index view.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(): View
    {
        return view('index');
    }
}
