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
            'review' => 'Worst apples ever!',
            'rating' => '1'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '1',
            'product_id' => '1',
            'review' => 'Great apples!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '1',
            'product_id' => '2',
            'review' => 'overriped bananas!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '2',
            'product_id' => '3',
            'review' => 'Sweetest strawberries ever!!',
            'rating' => '4'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '3',
            'product_id' => '4',
            'review' => 'I had an amazing experience. Delivery was quick!',
            'rating' => '3.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '2',
            'product_id' => '4',
            'review' => 'Sweet cucumbers!!',
            'rating' => '4.5'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '1',
            'product_id' => '4',
            'review' => 'Late delivery of cucumbers!',
            'rating' => '2'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '1',
            'product_id' => '5',
            'review' => 'Celery were fresh!',
            'rating' => '4'

        ]);

        DB::table('reviews')->insert([
            'user_id' => '1',
            'product_id' => '6',
            'review' => 'Late delivery of onions!',
            'rating' => '2'

        ]);
    }
}
