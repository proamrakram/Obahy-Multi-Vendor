<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $x = 0;

        $times = 0;

        while ($times < 100) {

            DB::table('products')->insert(
                [
                    'id' => $x + 1,
                    'product_name_en' => Str::random(10),
                    'product_name_ar' => Str::random(10),
                    'product_description_en' => "Stracci Velvet Quilted Very Warm Winter Pullover Two Pieces Top And Pants",
                    'product_description_ar' => "ترنج شتوي شبابي من Stracci  مخمل مبطن دافئ جدا قطعتين بلوزة وبنطلون",
                    'product_type' => "model",
                    'product_category' => random_int(1, 14),
                    'product_size' => json_encode(['S', 'M', 'L', 'XL', 'XXL']),
                    'product_serial_number' => strtotime(now()),
                    'product_vat' => '20',
                    'product_vat_value' => '21',
                    'product_price' => random_int(50, 300),
                    'product_price_after_vat' => 21,
                    'wholesale_price' => random_int(50, 300),
                    'is_affiliate' => 0,
                    'affiliate_type' => 'ratio',
                    'affiliate_value' => 4.5,
                    'product_status' => 'active',
                    'in_stock' => 0,
                    'product_3d_image' => "",
                    'product_main_image' => 's-1.jpg',
                    // 'product_images' => json_encode(['s-1.jpg', 's-2.jpg', 's-3.jpg', 's-4.jpg', 's-5.jpg', 's-6.jpg', 's-7.jpg', 's-8.jpg', 's-9.jpg']),
                    'is_delete' => 0,
                ]
            );

            // $product = DB::table('products')->find($x);
            $product = Product::find($x);

            $color = DB::table('product_colors')->find($x);

            foreach ([1, 2, 3, 4, 5] as $color_id) {

                DB::table('colors_of_product')->insert([
                    'product_id' => $x + 1,
                    'color_id' => $color_id
                ]);
            }


            $x = $x + 1;
            sleep(2);

            $times = $times + 1;
        }
    }
}
