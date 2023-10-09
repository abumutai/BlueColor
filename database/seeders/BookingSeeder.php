<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed multiple booking records
        Booking::create([
            'city_id' => 1,
            'user_id' => 1,
            'county_id' => 1,
            'service_id' => 1,
            'provider_id' => 1,
            'appnt_date' => '2023-10-15',
            'appnt_time' => '14:00:00',
            'status' => 'pending'
        ]);

        Booking::create([
            'city_id' => 2,
            'user_id' => 2,
            'county_id' => 2,
            'service_id' => 2,
            'provider_id' => 2,
            'appnt_date' => '2023-10-16',
            'appnt_time' => '15:30:00',
            'status' => 'confirmed'
        ]);

        Booking::create([
            'city_id' => 3,
            'user_id' => 3,
            'county_id' => 3,
            'service_id' => 3,
            'provider_id' => 3,
            'appnt_date' => '2023-10-17',
            'appnt_time' => '10:00:00',
            'status' => 'completed'
        ]);

        // Add more records as needed
    }
}

