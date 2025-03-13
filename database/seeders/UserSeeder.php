<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'type' => 'admin',
            'role' => '',
            'avatar' => '',
            'fname' => 'Michael',
            'lname' => 'Asare',
            'dob' => '1990-01-01',
            'gender' => 'male',
            'email' => 'admin@nosmay.com',
            'contact' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'status' => 1
        ]);
    }
}
