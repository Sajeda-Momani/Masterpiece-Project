<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
     
        $orders = [
            [
                'customer_id' => 3, 
                'address_id' => 1,
                'coupon_id' => null,
                'order_date' => now(),
                'total_price' => 100.00,
                'status' => 'Pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, 
                'address_id' => 2,
                'coupon_id' => 1, 
                'order_date' => now()->subDays(2), 
                'total_price' => 150.00,
                'status' => 'Completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more orders for existing customers as needed
        ];

        // Insert the data into the "orders" table
        DB::table('orders')->insert($orders);
    }
}
