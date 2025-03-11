<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeadController extends Controller
{
    // Applications
    public function lead_add()
    {
        return view('admin.leads.lead-add');
    }

    public function lead_list()
    {
        return view('admin.leads.leads-list')->with([
        ]);
    }

    public function lead_view()
    {
        return view('admin.leads.lead-view')->with([
        ]);
    }
}
