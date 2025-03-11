<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Applications
    public function recurring_service_add()
    {
        return view('admin.services.recurring-service-add');
    }

    public function recurring_service_list()
    {
        return view('admin.services.recurring-services-list')->with([
        ]);
    }

    public function recurring_service_view()
    {
        return view('admin.services.recurring-service-view')->with([
        ]);
    }

    public function onetime_service_add()
    {
        return view('admin.services.onetime-service-add');
    }

    public function onetime_service_list()
    {
        return view('admin.services.onetime-services-list')->with([
        ]);
    }

    public function onetime_service_view()
    {
        return view('admin.services.onetime-service-view')->with([
        ]);
    }
    
    public function bundled_service_add()
    {
        return view('admin.services.bundled-service-add');
    }

    public function bundled_service_list()
    {
        return view('admin.services.bundled-services-list')->with([
        ]);
    }

    public function bundled_service_view()
    {
        return view('admin.services.bundled-service-view')->with([
        ]);
    }
}
