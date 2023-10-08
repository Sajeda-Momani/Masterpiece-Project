<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coupons = [
            [
                'code' => 'COUPON1',
                'discount' => 10.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'COUPON2',
                'discount' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'code' => 'COUPON3',
                'discount' => 15.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insert the data into the "coupons" table
        DB::table('coupons')->insert($coupons);
    }
}
