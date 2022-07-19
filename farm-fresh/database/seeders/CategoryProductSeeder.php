<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'category_id' => '1',
            'product_id' => '1'

        ]);

        DB::table('images')->insert([
            'category_id' => '1',
            'product_id' => '2'

        ]);

        DB::table('images')->insert([
            'category_id' => '1',
            'product_id' => '3'

        ]);

        DB::table('images')->insert([
            'category_id' => '2',
            'product_id' => '4'

        ]);

        DB::table('images')->insert([
            'category_id' => '2',
            'product_id' => '5'

        ]);

        DB::table('images')->insert([
            'category_id' => '3',
            'product_id' => '6'

        ]);
    }
}
