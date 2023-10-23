<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define category variables
        $categorySmartAssistants = Category::where('name', 'Smart Assistants')->first();
        $categoryStreamingDevices = Category::where('name', 'Streaming Devices')->first();
        $categorySmartLighting = Category::where('name', 'Smart Lighting')->first();
        $categorySmartPlugs = Category::where('name', 'Smart Plugs')->first();
        $categorySmartSensors = Category::where('name', 'Smart Sensors')->first();
        $categorySecurityCameras = Category::where('name', 'Security Cameras')->first();
        $categorySmartDoorbells = Category::where('name', 'Smart Doorbells')->first();

        // Define products array
        $products = [
            [
                'name' => 'Amazon Echo Dot',
                'description' => 'Voice-controlled smart speaker with Alexa.',
                'price' => 39.99,
                'category_id' => $categorySmartAssistants->id,
                'brand' => 'Amazon',
                'brief' => 'Compact and affordable smart assistant.',
                'quantity_in_stock' => 100,
                'image1' => 'images\product-image\small-image\Amazon Echo Dot\11.jpg',
                'image2' => 'images\product-image\small-image\Amazon Echo Dot\12.jpg',
                'image3' => 'images\product-image\small-image\Amazon Echo Dot\13.jpg',
                'image4' => 'images\product-image\small-image\Amazon Echo Dot\14.jpg',
            ],
            [
                'name' => 'Roku Streaming Stick',
                'description' => 'Streaming media player with 4K streaming support.',
                'price' => 49.99,
                'category_id' => $categoryStreamingDevices->id,
                'brand' => 'Roku',
                'brief' => 'Enjoy your favorite shows and movies in 4K HDR.',
                'quantity_in_stock' => 80,
                'image1' => 'images\product-image\small-image\Roku Streaming Stick\21.jpg',
                'image2' => 'images\product-image\small-image\Roku Streaming Stick\22.jpg',
                'image3' => 'images\product-image\small-image\Roku Streaming Stick\23.jpg',
                'image4' => 'images\product-image\small-image\Roku Streaming Stick\24.jpg',
            ],
            [
                'name' => 'Philips Hue Smart Bulb',
                'description' => 'Wireless LED smart bulb for smart lighting solutions.',
                'price' => 29.99,
                'category_id' => $categorySmartLighting->id,
                'brand' => 'Philips',
                'brief' => 'Control your lighting remotely and set the perfect ambiance.',
                'quantity_in_stock' => 120,
                'image1' => 'images\product-image\small-image\Philips Hue Smart Bulb\31.jpg',
                'image2' => 'images\product-image\small-image\Philips Hue Smart Bulb\32.jpg',
                'image3' => 'images\product-image\small-image\Philips Hue Smart Bulb\33.jpeg',
                'image4' => 'images\product-image\small-image\Philips Hue Smart Bulb\34.jpg',
            ],
            [
                'name' => 'TP-Link Smart Plug',
                'description' => 'Smart Wi-Fi plug for remote control of devices.',
                'price' => 19.99,
                'category_id' => $categorySmartPlugs->id,
                'brand' => 'TP-Link',
                'brief' => 'Turn your devices on or off from anywhere with your smartphone.',
                'quantity_in_stock' => 90,
                'image1' => 'images\product-image\small-image\TP-Link Smart Plug\41.jpg',
                'image2' => 'images\product-image\small-image\TP-Link Smart Plug\42.jpg',
                'image3' => 'images\product-image\small-image\TP-Link Smart Plug\43.jpg',
                'image4' => 'images\product-image\small-image\TP-Link Smart Plug\44.png',
            ],
            [
                'name' => 'Ring Video Doorbell',
                'description' => 'Video doorbell with motion-activated alerts.',
                'price' => 149.99,
                'category_id' => $categorySmartDoorbells->id,
                'brand' => 'Ring',
                'brief' => 'See, hear, and speak to visitors from your smartphone, tablet, or PC.',
                'quantity_in_stock' => 70,
                'image1' => 'images\product-image\small-image\Ring Video Doorbell\51.png',
                'image2' => 'images\product-image\small-image\Ring Video Doorbell\52.jpg',
                'image3' => 'images\product-image\small-image\Ring Video Doorbell\31.jpg',
                'image4' => 'images\product-image\small-image\Ring Video Doorbell\51.jpg',
            ],

            [
                'name' => 'Security Camera Model 1',
                'description' => 'High-quality security camera with advanced features.',
                'price' => 79.99,
                'category_id' => $categorySecurityCameras->id,
                'brand' => 'SecurityCam Inc.',
                'brief' => 'Ensure your property is safe with our top-notch security camera.',
                'quantity_in_stock' => 50,
                'image1' => 'images\product-image\small-image\Security Camera eufy\6.png',
                'image2' => 'images\product-image\small-image\Security Camera eufy\6.png',
                'image3' => 'images\product-image\small-image\Security Camera eufy\6.png',
                'image4' => 'images\product-image\small-image\Security Camera eufy\6.png',
            ],
        ];

        // Loop through products and insert into the database
        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
