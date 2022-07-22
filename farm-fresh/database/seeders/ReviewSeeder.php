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
            'user_id' => '1',
            'product_id' => '1',
            'review' => 'I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '2',
            'product_id' => '1',
            'review' => 'I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '2',
            'review' => 'I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '3',
            'review' => 'I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!',
            'rating' => '4'

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
    }
}
