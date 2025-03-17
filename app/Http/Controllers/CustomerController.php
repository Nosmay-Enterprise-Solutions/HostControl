<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'id_types' => System::id_types()
        ]);
    }

    public function process_customer_add(Request $io)
    {
        // dd($io);
        $record = Customer::orderBy('id', 'desc')
            ->first()->code;
        if ( is_null($record) ){
            $nextNum = 'NES'.'-000001';
        } else {
            $expNum = explode('-', $record);
            $bar = count($expNum);
            if($bar == 2){
                $innoumber = ($expNum[1] + 1);
                $nextNum = $expNum[0] . '-' . sprintf('%06d', $innoumber);
            }else{
                $nextNum = 'NES'.'-000001';
            }
        } // dd($nextNum);

        // Save User
        $user = new User;
        $user->type = 'customer';
        $user->role = 'sysCust';
        $user->email = $io->portal_login;
        $user->contact = $io->phonenumber;
        $user->password = bcrypt($io->portal_password);
        $user->save();
        $userid = $user->id;

        // Save Record
        if($io->category == 'corporate'){
            $cust = Customer::create([
                'user_id' => $userid,
                'code' => $nextNum,
                'type' => $io->category,
                'companyname' => $io->company_name,
                'email' => $io->email,
                'billing_email' => $io->billing_email,
                'contact' => $io->phonenumber,
                'registration_date' => $io->registration_date,
                'id_number' => $io->identification_id,
                'partner_id ' => $io->partner,
                'location_id' => $io->location,
                'address' => $io->address,
                'city' => $io->city,
            ]);
        }elseif($io->category == 'individual'){
            $cust = Customer::create([
                'user_id' => $userid,
                'code' => $nextNum,
                'type' => $io->category,
                'surname' => $io->surname,
                'firstname' => $io->other_names,
                'email' => $io->email,
                'billing_email' => $io->billing_email,
                'contact' => $io->phonenumber,
                'dob' => $io->date_of_birth,
                'id_number' => $io->identification_id,
                'partner_id ' => $io->partner,
                'location_id' => $io->location,
                'address' => $io->address,
                'city' => $io->city,
            ]);
        }

        return redirect()->route('admin-customer-list');
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
