<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $x = 1;
        while ($x) {
            $images = [
                $x => [
                    's-1.jpg',
                    's-2.jpg',
                    's-3.jpg',
                    's-4.jpg',
                ],
            ];

            foreach ($images as $product_id => $images) {
                foreach ($images as $image) {
                    DB::table('product_images')->insert([
                        'product_id' =>  $product_id,
                        'is_main' => 0,
                        'image' =>  $image,
                        'status' =>  'active',
                        'is_delete' => 0
                    ]);
                }
            }

            if ($x == 100) {
                break;
                break;
            }
            $x = $x + 1;
        }
    }
}
