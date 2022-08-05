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
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-03-17 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '2',
            'delivery_charges' => '12.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2021-08-17 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '3',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '5',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '5',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-02-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '39.89',
            'subtotal' => '57.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2021-09-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '6',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '8',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '7.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '4.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '4.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '9.89',
            'subtotal' => '4.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '5.89',
            'subtotal' => '3.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('orders')->insert([
            'user_id' => '7',
            'delivery_charges' => '10.99',
            'gst' => '3.5',
            'pst' => '4.9',
            'vat' => '3.5',
            'order_status' => 'Shipped',
            'total' => '4.89',
            'subtotal' => '2.00',
            'billing_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'shipping_address' => '{"address_type":"Home","address":"234, 1792 Pambina Hwy","city":"WINNIPEG","province":"MB","country":"Canada","postal_code":"R3T 6G8","phone":"4313369999"}',
            'auth_code' => '1234',
            'transaction_status' => 'Successful',
            'created_at' => '2022-04-1 10:30:34'
        ]);
    }
}
