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
            'response' => 'Order Placed'
        ]);
    }
}
