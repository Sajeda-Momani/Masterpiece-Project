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
                'image' => 'http://127.0.0.1:8000/uploads/Smart Assistants.png',
            ],
            
            [
                'name' => 'Smart Lighting',
                'description' => 'Wireless and controllable lighting solutions.',
                'image' => 'http://127.0.0.1:8000/uploads/Smart Lights.png',
            ],
            [
                'name' => 'Smart Plugs',
                'description' => 'Smart plugs and outlets for remote control of appliances.',
                'image' => 'http://127.0.0.1:8000/uploads/Smart Switches.png',
            ],
            
            [
                'name' => 'Security Cameras',
                'description' => 'Security cameras for home surveillance.',
                'image' => 'http://127.0.0.1:8000/uploads/Security Cameras.png',
            ],
            [
                'name' => 'Smart Doorbells',
                'description' => 'Video doorbells with smart features.',
                'image' => 'http://127.0.0.1:8000/uploads/Smart Entry.png',
            ],
            [
                'name' => 'Smart Kits',
                'description' => 'Smart kit with multiple devices for home automation.',
                'image' => 'images\feature-image\1.png',
            ],
          
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
