<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Customer;
use App\Models\Location;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    // ---------- User Role ----------------
    public function roles()
    {
        return view('admin.administration.roles')->with([

        ]);
    }
    // ---------- Partners ----------------
    public function partners()
    {
        $data = Partner::all();
        $parted = [];

        foreach($data as $part){
            $cust = Customer::where('partner_id', $part->id)->count();
            $parted[] = [
                'id' => $part->id,
                'name' => $part->name,
                'customers' => $cust
            ];
        }

        return view('admin.administration.partners')->with([
            'partners' => $parted
        ]);
    }

    public function add_partner(Request $io)
    {
        $io->validate([
            'partner_name' => 'required'
        ]);

        $add = Partner::create([
            'name' => $io->partner_name
        ]);

        return back()->with('success', 'Partner added successfully');
    }

    // --------------- Locations --------------------------
    public function locations()
    {
        $location = [];
        $data = Location::all();
        $partners = Partner::where('status', 1)->get();
        foreach($data as $loc){
            $location[] = [
                'code' => $loc->code,
                'name' => $loc->name,
                'partner' => $partners->where('id', $loc->partner_id)->first()->name,
                'cust_count' => Customer::where('location_id', $loc->id)->get()->count()
            ];
        }

        return view('admin.administration.locations')->with([
            'locations' => $location,
            'partners' => $partners,
        ]);
    }

    public function add_location(Request $io)
    {
        // dd($io);
        $add = Location::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => $io->location_name,
            'partner_id' => $io->partner
        ]);

        return back();
    }
}
