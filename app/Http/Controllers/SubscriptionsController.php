<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    // Applications
    public function all_subscriptions()
    {
        return view('admin.subscriptions.subscriptions-list');
    }

}
