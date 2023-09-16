<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Sign In
    public function signIn() {
        return view('auth.signin');
    }
}
