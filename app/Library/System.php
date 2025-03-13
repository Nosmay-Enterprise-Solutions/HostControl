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
}
