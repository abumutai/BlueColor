<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\County;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Nairobi','Mombasa','Kisumu','Nakuru'];
        foreach ($cities as $key => $county) {
            $check = County::where('name',$county)->first();
            if (!$check) {
                County::create([
                    'county_number' => $key,
                    'name' => $county,
                    'user_id' => User::where('user_type',0)->first()->id
                ]);
            }
        }
        foreach ($cities as $city) {
            $check = City::where('name',$city)->first();
            if (!$check) {
                City::create([
                    'county_id' => County::first()->id,
                    'name' => $city,
                    'user_id' => User::where('user_type',0)->first()->id
                ]);
            }
        }
    }
}
