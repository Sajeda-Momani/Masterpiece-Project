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
        $categorySmartLighting = Category::where('name', 'Smart Lighting')->first();
        $categorySmartPlugs = Category::where('name', 'Smart Plugs')->first();
        $categorySecurityCameras = Category::where('name', 'Security Cameras')->first();
        $categorySmartDoorbells = Category::where('name', 'Smart Doorbells')->first();
        $categorySmartKits = Category::where('name', 'Smart Kits')->first();


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

            [
                'name' => 'Smart Life Super Package',
                'description' => '1 Security Indoor Camera,
                1 Smart Wi-Fi Plug,
                1 Smart switch,
                1 Smart IR Remote Control',
                'price' => 29.99,
                'category_id' => $categorySmartKits->id,
                'brand' => 'SecurityCam Inc.',
                'brief' => 'Super package that includes camera, plug, switch, IR remote to automate your home.',
                'quantity_in_stock' => 20,
                'image1' => 'images\product-image\kit1_1.png',
                'image2' => 'images\product-image\kit1_1.png',
                'image3' => 'images\product-image\kit1_1.png',
                'image4' => 'images\product-image\kit1_1.png',
            ],
            [
                'name' => 'Smart Life Master Package',
                'description' => '1 Security Indoor Camera, 
                2 Smart Wi-Fi Plug, 
                3 Smart switch, 
                2 Smart IR Remote Control, 
                1 Smart Video Doorbell, 
                3 Switch Button Keypad',
                'price' => 49.99,
                'category_id' => $categorySmartKits->id,
                'brand' => 'SecurityCam Inc.',
                'brief' => ' Master package that includes camera, plug, switch, IR remote, video doorbell, and 3 gang switch button keypad to automate your home.',
                'quantity_in_stock' => 20,
                'image1' => 'images\product-image\kit2_1.png',
                'image2' => 'images\product-image\kit2_1.png',
                'image3' => 'images\product-image\kit2_1.png',
                'image4' => 'images\product-image\kit2_1.png',
            ],
            [
                'name' => 'Connected Security 1',
                'description' => '1 Main Control Unit, 1 Motion Sensor, 1 Door/Window Sensor, 1 SIM Card, Mobile application',
                'price' => 59.99,
                'category_id' => $categorySmartKits->id,
                'brand' => 'SecurityCam Inc.',
                'brief' => ' The kit includes a Main Control Unit, Motion Sensor, Door/Window Sensor, SIM Card, and a mobile application for easy monitoring.',
                'quantity_in_stock' => 20,
                'image1' => 'images\product-image\kit3_1.png',
                'image2' => 'images\product-image\kit3_1.png',
                'image3' => 'images\product-image\kit3_1.png',
                'image4' => 'images\product-image\kit3_1.png',
            ],

            [
                [
                    'name' => 'Connected Security 3',
                    'description' => '1 Main Control Unit, 2 Motion Sensors, 2 Door/Window Sensors, 1 Wired External Siren, 1 Remote Control, 1 SIM Card, Mobile application',
                    'price' => 69.99,
                    'category_id' => $categorySmartKits->id,
                    'brand' => 'SecurityCam Inc.',
                    'brief' => ' The kit includes a Main Control Unit, 2 Motion Sensors, 2 Door/Window Sensors, 1 Wired External Siren, 1 Remote Control, 1 SIM Card, and a mobile application for easy monitoring.',
                    'quantity_in_stock' => 20,
                    'image1' => 'images\product-image\kit4_1.png',
                    'image2' => 'images\product-image\kit4_1.png',
                    'image3' => 'images\product-image\kit4_1.png',
                    'image4' => 'images\product-image\kit4_1.png',
                ],

            ],



        ];

        // Loop through products and insert into the database
        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
