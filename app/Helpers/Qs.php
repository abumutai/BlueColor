<?php

namespace App\Helpers;
use App\Models\ServiceSubCategory;
use App\Models\ServiceCategory;

class Qs
{
    //your class methods.//set to static change when there is need
    public static function getSubCategoryByID($id)
    {
        return ServiceSubCategory::find($id);
    }
    
    public static function getCategoryByID($id)
    {
        return ServiceCategory::find($id);
    }
}
