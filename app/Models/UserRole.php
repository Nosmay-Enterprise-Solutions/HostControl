<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'code',
        'key',
        'name',
        'description',
        'partner_id',
    ];
}
