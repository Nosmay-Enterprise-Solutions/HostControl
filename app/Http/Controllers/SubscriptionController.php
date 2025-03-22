<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function all_subscriptions()
    {
        return view('admin.subscriptions.subscriptions-list');
    }
}
