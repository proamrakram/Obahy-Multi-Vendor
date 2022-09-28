<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'mobile_no' => '+972592403014',
                'user_type' => 'admin',
                'gender' => 'male',
                'password' => Hash::make('123456789'),
            ]
        );

        DB::table('users')->insert(
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'store@gmail.com',
                'mobile_no' => '+972592403013',
                'user_type' => 'store_admin',
                'store_id' => '1',
                'country_id' => '1',
                'city_id' => '1',
                'gender' => 'male',
                'password' => Hash::make('123456789'),
            ]
        );


        DB::table('users')->insert(
            [
                'id' => 3,
                'name' => 'customer',
                'email' => 'customer@gmail.com',
                'mobile_no' => '+972599916672',
                'user_type' => 'customer',
                'store_id' => '1',
                'country_id' => '1',
                'city_id' => '1',
                'gender' => 'male',
                'password' => Hash::make('123456789'),
            ]
        );
    }
}
