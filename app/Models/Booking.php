<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillables = [
        'city_id',
        'user_id',
        'county_id',
        'service_id',
        'provider_id',
        'appnt_date',
        'appnt_time',
        'status'
    ];
}
