<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'type' => 'corporate',
            'code' => 'NES-000001',
            'companyname' => 'Ashley Payments',
            'contact' => '08012345678',
            'email' => 'admin@ashleypayments.com',
            'billing_email' => 'admin@ashleypayments.com',
            'registration_date' => now(),
            'id_type' => 'business_certificate',
            'id_number' => 'RC123456',
            'address' => '123, Ashley Street',
            'city' => 'Lagos',
            'state' => 'Lagos',
            'country' => 'Nigeria',
            'location_id' => null,
            'status' => 1,
            'created_by' => 1,
        ]);
    }
}
