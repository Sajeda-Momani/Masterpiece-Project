<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define your seed data here
        $addresses = [
            [
                'customer_id' => 3, 
                'city' => 'New York',
                'town' => 'Manhattan',
                'street' => '123 Main Street',
                'department_number' => 'Apt 456',
                'phone' => '123-456-7890',
                'additional_information' => 'Near Central Park',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, 
                'city' => 'Los Angeles',
                'town' => 'Hollywood',
                'street' => '456 Elm Street',
                'department_number' => 'Unit 789',
                'phone' => '987-654-3210',
                'additional_information' => 'Close to Walk of Fame',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('addresses')->insert($addresses);
    }
}
