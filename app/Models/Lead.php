<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'code',
        'type',
        'companyname',
        'surname',
        'firstname',
        'email',
        'billing_email',
        'contact',
        'dob',
        'registration_date',
        'id_type',
        'id_number',
        'id_image',
        'address',
        'city',
        'state',
        'country',
        'location_id',
        'status'
    ];
}
