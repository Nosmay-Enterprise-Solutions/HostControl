<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Applications
    public function customer_add()
    {
        return view('admin.customers.customer-add');
    }

    public function customer_list()
    {
        return view('admin.customers.customers-list')->with([
        ]);
    }

    public function customer_view()
    {
        return view('admin.customers.customer-view')->with([
        ]);
    }
}
