<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\ServiceCategory;
use Illuminate\Database\Seeder;
use App\Models\ServiceSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Computer','Plumbing','Cleaning','Carwash','Capentry','Other'];
        foreach ($categories as $category) {
            $check = ServiceCategory::where('title',$category)->first();
            if (!$check) {
                ServiceCategory::create([
                    'title' => $category,
                    'image' => 'default.png',
                    'user_id' => User::where('user_type',0)->first()->id,
                    'featured'=> 'NO'
                ]);
            }
        }

        $subcategories = ['Carpet Cleaning','Sofa Cleaning','Landscaping','Other'];
        foreach ($subcategories as $subcategory) {
            $check = ServiceSubCategory::where('title',$subcategory)->first();
            if (!$check) {
                ServiceSubCategory::create([
                    'category_id' => ServiceCategory::first()->id,
                    'title' => $subcategory,
                    'image' => 'default.png',
                    'user_id' => User::where('user_type',0)->first()->id
                ]);
            }
        }
    }
}
