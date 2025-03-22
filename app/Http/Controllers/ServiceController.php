<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Recurring Services
    public function recurring_service_list()
    {
        return view('admin.services.recurring-services-list');
    }

    public function recurring_service_add()
    {
        return view('admin.services.recurring-service-add');
    }

    // OneTime Services
    public function onetime_service_list()
    {
        return view('admin.services.onetime-services-list');
    }

    // Bundles Services
    public function bundled_service_list()
    {
        return view('admin.services.bundled-services-list');
    }
}
