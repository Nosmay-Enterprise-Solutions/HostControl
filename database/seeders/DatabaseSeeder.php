<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'type' => '',
            'role' => '',
            'avatar' => '',
            'fname' => '',
            'lname' => '',
            'dob' => '',
            'gender' => '',
            'email' => 'admin@nosmay.com',
            'contact' => '',
            'email_verified_at' => '',
            'password' => '',
        ]);
    }
}
