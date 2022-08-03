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
            'quantity' => '10',
            'created_at' => '2022-03-17 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '2',
            'product_id' => '4',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2021-08-17 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '3',
            'product_id' => '4',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-01-17 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '4',
            'product_id' => '7',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '5',
            'product_id' => '7',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-02-17 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '6',
            'product_id' => '7',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-02-1 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '7',
            'product_id' => '22',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2021-09-1 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '8',
            'product_id' => '6',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '9',
            'product_id' => '18',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '10',
            'product_id' => '31',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-06-1 10:30:34'
        ]);

        DB::table('order_line_items')->insert([
            'order_id' => '11',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '12',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '13',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '14',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '15',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '16',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '17',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '27',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '30',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '33',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '40',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
        DB::table('order_line_items')->insert([
            'order_id' => '45',
            'product_id' => '38',
            'unit_price' => '2.49',
            'product_name' => 'Cucumber',
            'quantity' => '12',
            'created_at' => '2022-04-1 10:30:34'
        ]);
    }
}
