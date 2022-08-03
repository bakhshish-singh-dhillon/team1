<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'order_id' => '1',
            'cc_num' => 'xxxx-xxxx-xxxx-1234',
            'payment_transaction_id' => '1',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-03-17 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '2',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '2',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2021-08-17 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '3',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '4',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '5',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-02-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '6',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2021-09-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '7',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '8',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '9',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '10',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);

        DB::table('transactions')->insert([
            'order_id' => '11',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '12',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '13',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '14',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '15',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '16',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '27',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '30',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '33',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '40',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('transactions')->insert([
            'order_id' => '45',
            'cc_num' => 'xxxx-xxxx-xxxx-3432',
            'payment_transaction_id' => '3',
            'status' => 'Successful',
            'response' => 'Order Placed',
            'created_at' => '2022-04-1 10:30:34'
        ]);
    }
}
