<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Gala Apple',
            'price' => '2.49',
            'description' => 'Gala apples are sweet and crisp with pink-orange stripes over a yellow background. They are juicy, fragrant, and best enjoyed raw.',
            'measure_unit' => 'lbs',
            'quantity' => '3'

        ]);
    }
}
