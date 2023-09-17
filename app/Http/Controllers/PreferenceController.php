<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    // System Users
    public function users()
    {
        return view('admin.preferences.users');
    }
}
