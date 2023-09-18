<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    // System Users
    public function users()
    {
        $data = User::all();
        return view('admin.preferences.users')->with([
            'users' => $data
        ]);
    }
}
