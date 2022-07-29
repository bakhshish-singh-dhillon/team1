<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LineItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_line_items')->insert([
            'order_id' => '1',
            'product_id' => '1',
            'unit_price' => '2.49',
            'product_name' => 'Gala Apple',
            'quantity' => '10'

        ]);
    }
}
