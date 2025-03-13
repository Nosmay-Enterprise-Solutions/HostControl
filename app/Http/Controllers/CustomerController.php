<?php

namespace App\Http\Controllers;

use App\Library\System;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Applications
    public function customer_add()
    {
        return view('admin.customers.customer-add');
    }

    public function process_customer_add(Request $io)
    {
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
        $data = Customer::where('code', $code)->first();
        return view('admin.customers.customer-view')->with([
            'customer' => $data,
            'status' => System::mainStatus()
        ]);
    }
}
