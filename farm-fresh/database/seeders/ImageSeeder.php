<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'product_id' => '1',
            'image_url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '1',
            'image_url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'image_url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'image_url' => 'salad.png'

        ]);
    }
}
