<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(
            [
                'id' => 1,
                'store_name_ar' => 'متجر 1',
                'store_name_en' => 'store 1',
                'store_admin' => 2,
                'store_country' => 1,
                'store_city' => 1,
                'subscription_package_id' => 1,
                'store_address_en' => 'gaza street',
                'store_address_ar' => 'شارع غزة',
                'store_details_en' => 'details details details details',
                'store_details_ar' => 'وصف وصف وصف وصف ',
                'store_logo' => 'logo.png',
                'store_status' => 'active',
                'is_trail' => '1',
            ]
        );
    }
}
