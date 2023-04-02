<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('user_type',0)->where('email','admin@gmail.com')->first();
        if (!$admin) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 0,
                'phone' => '254707174948'
            ]);
        }

        $professional = User::where('user_type',1)->where('email','professional@gmail.com')->first();
        if (!$professional) {
            User::create([
                'name' => 'Professional',
                'email' => 'professional@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 1,
                'phone' => '254707174948'
            ]);
        }

        $user = User::where('user_type',2)->where('email','user@gmail.com')->first();
        if (!$user) {
            User::create([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456789'),
                'user_type' => 2,
                'phone' => '254707174948'
            ]);
        }
    }
}
