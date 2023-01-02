<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'county_id',
        'user_id'
    ];
    public function county()
    {
        return $this->belongsTo(County::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
