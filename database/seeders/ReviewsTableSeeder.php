<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define your seed data here
        $reviews = [
            [
                'product_id' => 1, 
                'customer_id' => 1, 
                'content' => 'This is a great product.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_id' => 2, 
                'customer_id' => 2, 
                'content' => 'Not satisfied with this product.',
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more reviews as needed
        ];

        // Insert the data into the "reviews" table
        DB::table('reviews')->insert($reviews);
    }
}
