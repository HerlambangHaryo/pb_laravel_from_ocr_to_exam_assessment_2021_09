<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //$data       = University::get();
        $content    = 'Dashboard';
        $panel_name = 'Dashboard';

        return view('content.backend.'.strtolower($content).'.index', 
                compact(
                    //'data', 
                    'content', 
                    'panel_name'
                )
            );
    }
}
