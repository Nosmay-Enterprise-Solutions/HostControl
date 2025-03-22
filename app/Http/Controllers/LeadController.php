<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\User;
use App\Library\System;
use App\Models\Partner;
use App\Models\LeadStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeadController extends Controller
{
    public function lead_list()
    {
        $data = Lead::all();

        return view('admin.leads.leads-list')->with([
            'leads' => $data,
            'status' => LeadStatus::all()
        ]);
    }

    public function add_lead()
    {
        return view('admin.leads.lead-add')->with([
            'partners' => Partner::where('status', 1)->get(),
            'id_types' => System::id_types()
        ]);
    }

    public function process_add_lead(Request $io)
    {
        $record = Lead::orderBy('id', 'desc')
            ->get(); // dd($record);
        if ( count($record) == 0 ){
            $nextNum = 'NEL'.'-000001';
        } else {
            $expNum = explode('-', $record->first()->code);
            $bar = count($expNum);
            if($bar == 2){
                $innoumber = ($expNum[1] + 1);
                $nextNum = $expNum[0] . '-' . sprintf('%06d', $innoumber);
            }else{
                $nextNum = 'NEL'.'-000001';
            }
        }

        // Save User
        $user = new User;
        $user->type = 'lead';
        $user->role = 'sysCust';
        $user->email = $io->portal_login;
        $user->contact = $io->phonenumber;
        $user->password = bcrypt($io->portal_password);
        $user->save();
        $userid = $user->id;

        // Save Record
        if($io->category == 'corporate'){
            $lead = Lead::create([
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
            $lead = Lead::create([
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

        Session::flash('nesHC', ['msg' => '<b>Success!</b> Customer added successfully!', 'type' => 'success']);
        return redirect()->route('admin-lead-list');
    }

    public function lead_view($code)
    {
        $data = Lead::where('code', $code)->first();

        if(is_null($data)){
            return back();
        }

        return view('admin.leads.lead-view')->with([
            'lead' => $data,
            'partners' => Partner::where('status', 1)->get(),
            'id_types' => System::id_types(),
            'status' => LeadStatus::all()
        ]);
    }

    public function pico_form(Request $io)
    {
        echo $io->data;
    }
}
