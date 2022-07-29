<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '1',
            'review' => 'Very bad experience !!',
            'rating' => '1.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '2',
            'product_id' => '1',
            'review' => 'Perfect to get everyting at once!',
            'rating' => '4.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '2',
            'review' => 'Delievered on time! Everything was fresh!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '2',
            'product_id' => '3',
            'review' => 'Overriped strwberries!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '4',
            'review' => 'Sweet cucumbers!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '4',
            'product_id' => '4',
            'review' => 'Bad experiene with deleivery',
            'rating' => '1.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '5',
            'product_id' => '4',
            'review' => 'I had an amazing experience.',
            'rating' => '5'

        ]);
        DB::table('reviews')->insert([
            'user_id' => '5',
            'product_id' => '4',
            'review' => 'Disappointed!!',
            'rating' => '1'

        ]);
        DB::table('reviews')->insert([
            'user_id' => '5',
            'product_id' => '4',
            'review' => 'Good Quality',
            'rating' => '2'

        ]);
        DB::table('reviews')->insert([
            'user_id' => '5',
            'product_id' => '4',
            'review' => 'Wonderfull!',
            'rating' => '5'

        ]);
        DB::table('reviews')->insert([
            'user_id' => '6',
            'product_id' => '4',
            'review' => 'nice!',
            'rating' => '5'

        ]);
    }
}
