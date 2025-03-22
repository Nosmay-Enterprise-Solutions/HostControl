<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Customers',
            'routes' => 'admin-customer-list,admin-customer-add,admin-customer-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Leads',
            'routes' => 'admin-lead-list,admin-lead-add,admin-lead-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Tickets',
            'routes' => 'admin-ticket-list,admin-ticket-add,admin-ticket-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Finance',
            'routes' => 'admin-finance-list,admin-finance-add,admin-finance-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Messages',
            'routes' => 'admin-message-list,admin-message-add,admin-message-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Subscriptions',
            'routes' => 'admin-subscription-list,admin-subscription-add,admin-subscription-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Service Plans',
            'routes' => 'admin-service-plan-list,admin-service-plan-add,admin-service-plan-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Administration',
            'routes' => 'admin-admin-list,admin-admin-add,admin-admin-view',
            'state' => 1
        ]);
        Module::create([
            'code' => Str::random(3).'-'.Str::random(3).'-'.Str::random(4),
            'name' => 'Configuration',
            'routes' => 'admin-configuration-list,admin-configuration-add,admin-configuration-view',
            'state' => 1
        ]);
    }
}
