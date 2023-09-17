<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymasterController extends Controller
{
    // Applications
    public function applications(){
        return view('admin.paymaster.app');
    }
}
