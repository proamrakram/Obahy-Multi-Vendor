<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AppearanceExpertController extends Controller
{
    protected $product_category_controller;
    public function __construct(ProductCategoryController $product_category_controller)
    {
        $this->product_category_controller = $product_category_controller;
    }

    public function storeAppearanceExpert()
    {
        $products = Product::language()->where('product_type', 'service')->where('is_delete', '0')->get();
        return view('Website.appearance-expert.store-appearance-expert', compact(['products']));
    }
    public function storeAppearanceExpertDetails($product_id)
    {
        $product = Product::language()->where('id', $product_id)
            ->where('product_type', 'service')
            ->where('is_delete', '0')
            ->first();

        $categorise =  $this->product_category_controller->getSubCategorise($product->category->id);

        $path_categorise = $this->product_category_controller->getPathCategoise($product->category);

        $relatedProducts = $product->relatedProducts->where('product_type', 'service')->random(4);

        return view('Website.appearance-expert.store-expert-details', compact(['product', 'categorise', 'path_categorise', 'relatedProducts']));
    }
}
