<?php

namespace App\Http\Controllers;

use App\Library\System;
use App\Models\Partner;
use App\Models\Customer;
use App\Models\Location;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Applications
    public function customer_add()
    {
        $partners = Partner::where('status', 1)->get();
        return view('admin.customers.customer-add')->with([
            'partners' => $partners,
        ]);
    }

    public function process_customer_add(Request $io)
    {
        dd($io);
        $record = Customer::orderBy('id', 'desc')
            ->first()->code;
        if ( is_null($record) ){
            $nextNum = 'NES'.'-000001';
        } else {
            $expNum = explode('-', $record->inv_num);
            $bar = count($expNum);
            if($bar == 2){
                $innoumber = ($expNum[1] + 1);
                $nextNum = $expNum[0] . '-' . sprintf('%06d', $innoumber);
            }else{
                $nextNum = 'NES'.'-000001';
            }
        }
    }

    public function customer_list()
    {
        $data = Customer::all();
        return view('admin.customers.customers-list')->with([
            'customers' => $data,
            'status' => System::mainStatus()
        ]);
    }

    public function customer_view(Request $io, $code)
    {
        $data = Customer::where('id', $code)->first();

        if(is_null($data)){
            return back();
        }

        return view('admin.customers.customer-view')->with([
            'customer' => $data,
            'partners' => Partner::where('status', 1)->get(),
            'status' => System::mainStatus()
        ]);
    }

    public function get_location($id)
    {
        if($id == 'null'){
            $data = Location::select('id', 'name')->where('status', 1)->get();
        }else{
            $data = Location::select('id', 'name')->where('partner_id', $id)->get();
        }
        return $data;
    }
}
