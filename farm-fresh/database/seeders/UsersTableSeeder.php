<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Team1',
            'email' => 'admin@team1.uwpace.ca',
            'password' => bcrypt('admin'),
            'is_admin' => true

        ]);
        DB::table('users')->insert([
            'first_name' => 'Customer',
            'last_name' => 'Doe',
            'email' => 'user@team1.uwpace.ca',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Jhon',
            'last_name' => 'Davie',
            'email' => 'jhon@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Mike',
            'last_name' => 'Rollie',
            'email' => 'mike@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Shawn',
            'last_name' => 'merrelle',
            'email' => 'shawn@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);
    }
}
