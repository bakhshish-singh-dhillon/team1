<?php

namespace Database\Seeders;

use App\Models\Image;
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
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '1',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '3',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '3',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '4',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '4',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '5',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '5',
            'url' => 'salad.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '6',
            'url' => 'salad.png'

        ]);
    }
}
