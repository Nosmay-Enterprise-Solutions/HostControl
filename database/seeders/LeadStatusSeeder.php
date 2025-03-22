<?php

namespace Database\Seeders;

use App\Models\LeadStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LeadStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeadStatus::create([
            'code' => 'new-enquiry',
            'name' => 'New Enquiry',
            'color' => 'orange'
        ]);
        LeadStatus::create([
            'code' => 'qualification',
            'name' => 'Qualification',
            'color' => 'blue'
        ]);
        LeadStatus::create([
            'code' => 'remittance',
            'name' => 'Remittance',
            'color' => 'pink'
        ]);
        LeadStatus::create([
            'code' => 'activation',
            'name' => 'Activation',
            'color' => 'green'
        ]);
        LeadStatus::create([
            'code' => 'won',
            'name' => 'Won',
            'color' => 'cyan'
        ]);
    }
}
