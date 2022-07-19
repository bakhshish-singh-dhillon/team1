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
            'name' => 'eggs',
            'category_id' => '1',
        ]);
    }
}
