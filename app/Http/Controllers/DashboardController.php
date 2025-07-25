<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        getCurrentUserFullname();

        return view('dashboard');
    }
}
