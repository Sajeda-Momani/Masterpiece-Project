<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [

        [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password123'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'password' => Hash::make('secret456'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Emily Johnson',
            'email' => 'emily@example.com',
            'password' => Hash::make('emilypass789'),
            'role' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    // Insert the sample admins into the admins table
    DB::table('admins')->insert($admins);
}
}
   