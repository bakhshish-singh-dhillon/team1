<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'id' => '1',
            'name' => 'Dairy',
        ]);

        DB::table('categories')->insert([
            'id' => '2',
            'name' => 'vegetables'

        ]);

        DB::table('categories')->insert([
            'id' => '3',
            'name' => 'fruits'

        ]);

        DB::table('categories')->insert([
            'id' => '4',
            'name' => 'eggs',
            'category_id' => '1',
        ]);


        DB::table('categories')->insert([
            'id' => '5',
            'name' => 'cheese',
            'category_id' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => '6',
            'name' => 'yogurt',
            'category_id' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => '7',
            'name' => 'butter',
            'category_id' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => '8',
            'name' => 'milk',
            'category_id' => '1',
        ]);

        DB::table('categories')->insert([
            'id' => '9',
            'name' => 'Tropical',
            'category_id' => '3',
        ]);

        DB::table('categories')->insert([
            'id' => '10',
            'name' => 'Berries',
            'category_id' => '3',
        ]);

        DB::table('categories')->insert([
            'id' => '14',
            'name' => 'Melons', //watermelon, honeydew melons
            'category_id' => '3',
        ]);

        DB::table('categories')->insert([
            'id' => '11',
            'name' => 'Leafy Green',
            'category_id' => '2',
        ]);

        DB::table('categories')->insert([
            'id' => '12',
            'name' => 'Root', //Potato, sweet potato, yam
            'category_id' => '2',
        ]);

        DB::table('categories')->insert([
            'id' => '13',
            'name' => 'Marrow', //pumpkin, cucumber, zucchini
            'category_id' => '2',
        ]);
    }
}
