<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear the table before seeding to avoid duplicates
        DB::table('blogs')->truncate();

        // Sample data to seed into the 'blogs' table
        $blogs = [
            [
                'title' => 'Sample Blog 1',
                'image_slug' => 'sample-blog-1.jpg',
                'content' => 'Lorem ipsum content for Sample Blog 1.',
                'user_id' => 1, // Replace with an actual user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Sample Blog 2',
                'image_slug' => 'sample-blog-2.jpg',
                'content' => 'Lorem ipsum content for Sample Blog 2.',
                'user_id' => 2, // Replace with an actual user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more blog entries as needed
        ];

        // Insert the data into the 'blogs' table
        DB::table('blogs')->insert($blogs);
    }
}
