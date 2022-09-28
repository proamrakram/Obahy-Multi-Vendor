<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountrySeeder::class,
            CitySeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            StoreSeeder::class,
            PackageItemSeeder::class,
            PaymentTypeSeeder::class,
            ProductCategorySeeder::class,
            ProductColorSeeder::class,
            ProductSeeder::class,
            ProductCommentSeeder::class,
            ProductRateSeeder::class,
            ProductImageSeeder::class
        ]);
    }
}
