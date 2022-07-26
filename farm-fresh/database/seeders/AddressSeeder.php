<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'address_type' => "Home",
            'address' => "105 harledan drive",
            'city' => "Winnipeg",
            'province' => "MB",
            'country' => "CA",
            'postal_code' => "R4A0C9",
            'phone' => "10983019830"
        ]);
        DB::table('addresses')->insert([
            'user_id' => 1,
            'address_type' => "Office",
            'address' => "1 blossom drive",
            'city' => "Winnipeg",
            'province' => "MB",
            'country' => "CA",
            'postal_code' => "R4A0C9",
            'phone' => "10983019830"
        ]);
        DB::table('addresses')->insert([
            'user_id' => 1,
            'address_type' => "School",
            'address' => "22 Kim drive",
            'city' => "Winnipeg",
            'province' => "MB",
            'country' => "CA",
            'postal_code' => "R4A0C9",
            'phone' => "10983019830"
        ]);
        DB::table('addresses')->insert([
            'user_id' => 1,
            'address_type' => "Parking",
            'address' => "345 Karls drive",
            'city' => "Winnipeg",
            'province' => "MB",
            'country' => "CA",
            'postal_code' => "R4A0C9",
            'phone' => "10983019830"
        ]);
    }
}
