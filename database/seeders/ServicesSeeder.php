<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'code' => '',
            'name' => 'SAP Business One',
            'description' => 'SAP Business One is a business management software designed for small and medium-sized enterprises, sold by the German company SAP',
            'start_date' => '',
            'end_date' => '',
            'status' => '',
        ]);
    }
}
