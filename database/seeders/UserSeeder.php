<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\User;
use App\Models\Partner;
use App\Models\UserRole;
use Illuminate\Support\Str;
use App\Models\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'Nosmay Ghana',
            'status' => 1
        ]);

        Location::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Accra',
            'status' => 1,
            'partner_id' => 1
        ]);

        Location::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Kumasi',
            'status' => 1,
            'partner_id' => 1
        ]);

        UserRole::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'role' => 'supAdmin',
            'name' => 'Super Administrator',
        ]);

        User::create([
            'type' => 'admin',
            'role' => 'supAdmin',
            'email' => 'admin@nosmay.com',
            'contact' => '',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'status' => 1
        ]);

        $userid = User::where('email', 'admin@nosmay.com')->first()->id;

        Administrator::create([
            'user_id' => $userid,
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'avatar' => '',
            'fname' => 'Michael',
            'lname' => 'Asare',
            'dob' => '1990-01-01',
            'gender' => 'male',
        ]);
    }
}
