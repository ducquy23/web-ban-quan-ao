<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardAction() {
        $title = 'Dashboard';
        return view('dashboards.index',[
            'title' => $title
        ]);
    }
}
