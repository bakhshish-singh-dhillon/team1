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
            'url' => 'apple.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '1',
            'url' => 'apple.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'url' => 'banana.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '2',
            'url' => 'banana.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '3',
            'url' => 'strawberry.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '3',
            'url' => 'strawberry.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '4',
            'url' => 'engcuc.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '4',
            'url' => 'engcuc.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '5',
            'url' => 'cs.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '5',
            'url' => 'cs.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '6',
            'url' => 'yellowon.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '7',
            'url' => 'tomato.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '8',
            'url' => 'iceberg.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '9',
            'url' => 'lemon.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '10',
            'url' => 'couliflower.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '11',
            'url' => 'broccoli.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '12',
            'url' => 'cantaloupe.png'

        ]);
        DB::table('images')->insert([
            'product_id' => '13',
            'url' => 'redpep.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '14',
            'url' => 'milk_1.89L.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '15',
            'url' => 'butter.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '16',
            'url' => 'cheese.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '17',
            'url' => 'whipped.png'

        ]);

        DB::table('images')->insert([
            'product_id' => '18',
            'url' => 'yougurt.png'

        ]);
    }
}
