<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [

            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('password123'),
                'image' => 'admin_images/john_doe.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => Hash::make('secret456'),
                'image' => 'admin_images/jane_smith.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emily@example.com',
                'password' => Hash::make('emilypass789'),
                'image' => 'admin_images/emily_johnson.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
    
        DB::table('customers')->insert($customers);
    }
    }

