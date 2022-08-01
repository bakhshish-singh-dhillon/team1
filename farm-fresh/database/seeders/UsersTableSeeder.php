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
            'email' => 'ecom.farmfresh@gmail.com',
            'password' => bcrypt('admin'),
            'is_admin' => true

        ]);
        DB::table('users')->insert([
            'first_name' => 'Silk',
            'last_name' => 'Doe',
            'email' => 'silk@gmail.com',
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

        DB::table('users')->insert([
            'first_name' => 'Narendra',
            'last_name' => 'Modi',
            'email' => 'narendra@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Marry',
            'last_name' => 'Kom',
            'email' => 'marry@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Cyber',
            'last_name' => 'Crime',
            'email' => 'cyber@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Honey',
            'last_name' => 'Bee',
            'email' => 'honey@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Dhara',
            'last_name' => 'Patel',
            'email' => 'dhara@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Sargam',
            'last_name' => 'Sanghani',
            'email' => 'sargam@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);
        DB::table('users')->insert([
            'first_name' => 'Pulkit',
            'last_name' => 'Bardwaj',
            'email' => 'pulkit@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Pravindra',
            'last_name' => 'Singh',
            'email' => 'pravindra@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Harry',
            'last_name' => 'Singh',
            'email' => 'harry@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);

        DB::table('users')->insert([
            'first_name' => 'Bakhshish',
            'last_name' => 'Singh',
            'email' => 'bakhshish@gmail.com',
            'password' => bcrypt('user'),
            'is_admin' => false

        ]);
    }
}
