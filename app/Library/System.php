<?php

namespace App\Library;

class System
{

    static function mainStatus()
    {
        $status = [
            [
                'code' => 0,
                'name' => 'Inactive',
                'color' => 'danger'
            ],
            [
                'code' => 1,
                'name' => 'Active',
                'color' => 'success'
            ],
            [
                'code' => 2,
                'name' => 'Suspended',
                'color' => 'warning'
            ],
            [
                'code' => 3,
                'name' => 'Closed',
                'color' => 'danger'
            ]
        ];

        return collect($status);
    }

    static function id_types()
    {
        $id = [
            [
                'value' => 'business_certificate',
                'name' => 'Business Certificate'
            ],
            [
                'value' => 'national_id',
                'name' => 'National ID'
            ],
            [
                'value' => 'passport',
                'name' => 'Passport'
            ],
        ];

        return collect($id);
    }
}
