<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'provider_id',
        'title',
        'amount',
        'county_id',
        'city_id',
        'address',
        'category_id',
        'sub_category_id',
        'description',
        'user_id',
        'image'
    ];
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }
    public function subcategory()
    {
        return $this->belongsTo(ServiceSubCategory::class, 'sub_category_id');
    }
    public function provider()
    {
        return $this->belongsTo(User::class,'provider_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
