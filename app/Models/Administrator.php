<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $fillable = [
        'code',
        'user_id',
        'avatar',
        'fname',
        'lname',
        'dob',
        'gender',
    ];
}
