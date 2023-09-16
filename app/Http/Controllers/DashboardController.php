<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Index Page
    public function index()
    {
        return view('admin.dashboard');
    }
}
