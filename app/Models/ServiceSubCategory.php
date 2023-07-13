<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceSubCategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'image',
        'user_id',
        'category_id' 
    ];
    public function category()
    {
        return $this->belongsTo(ServiceCategory::class,'category_id')->withTrashed();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
