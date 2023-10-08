<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = [
            [
                'name' => 'Smart Assistants',
                'description' => 'Voice-activated smart assistants for your home.',
                'image' => 'images/banner/Smart Assistants.png',
            ],
            [
                'name' => 'Streaming Devices',
                'description' => 'Programmable and energy-efficient Streaming Devices.',
                'image' => 'images/banner/Streaming Devices.png',
            ],
            [
                'name' => 'Smart Lighting',
                'description' => 'Wireless and controllable lighting solutions.',
                'image' => 'images/banner/Smart Lights.png',
            ],
            [
                'name' => 'Smart Plugs & Outlets',
                'description' => 'Smart plugs and outlets for remote control of appliances.',
                'image' => 'images/banner/Smart Switches.png',
            ],
            [
                'name' => 'Smart Sensors',
                'description' => 'Sensors for monitoring and automation.',
                'image' => 'images/banner/Smart Sensors.png',
            ],
            [
                'name' => 'Security Cameras',
                'description' => 'Security cameras for home surveillance.',
                'image' => 'images/banner/Security Cameras.png',
            ],
            [
                'name' => 'Smart Doorbells',
                'description' => 'Video doorbells with smart features.',
                'image' => 'images/banner/Smart Entry.png',
            ],
          
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
