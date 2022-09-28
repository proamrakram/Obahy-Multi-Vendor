<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(
            [
                'id' => 1,
                "city_name_en" => "Gaza",
                "city_name_ar" => "غزة",
                "country_id" => 1,
                "status" => "active",
                'is_delete' => 0,
            ]
        );
    }
}
