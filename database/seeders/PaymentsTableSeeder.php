<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Define your seed data here
        $payments = [
            [
                'customer_id' => 3, 
                'order_id' => 1,    
                'payment_method' => 'Credit Card',
                'transaction_id' => '12345abc',
                'amount' => 100.00,
                'currency' => 'USD',
                'payment_status' => 'Completed',
                'payment_date' => now(),
                'payment_details' => 'Payment details here',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, 
                'order_id' => 2,    
                'payment_method' => 'PayPal',
                'transaction_id' => 'xyz987',
                'amount' => 75.50,
                'currency' => 'EUR',
                'payment_status' => 'Pending',
                'payment_date' => now(),
                'payment_details' => 'Payment details here',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('payments')->insert($payments);
    }

}
