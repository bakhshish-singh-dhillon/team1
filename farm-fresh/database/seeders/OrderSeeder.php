<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'user_id' => '1',
            'delivery_charges' => '12.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '94.89',
            'subtotal' => '70.00',
            'billing_address' => '1792 Pambina Hwy, Winnipeg - R3T6G8, Manitoba',
            'shipping_address' => '1792 Pambina Hwy, Winnipeg - R3T6G8,  Manitoba',
            'auth_code' => '1234',
            'transaction_status' => 'Successful'
        ]);
    }
}
