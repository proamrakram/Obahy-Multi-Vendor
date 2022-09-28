<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    protected $lang;

    public function __construct()
    {
        $this->lang = session('lang');
    }

    public function getPathCategoise($category)
    {
        $array = [];

        if ($category && $category->parent_id) {

            array_push($array, $category->id);

            $parent_id = $category->parent_id;

            while (1) {
                $category = ProductCategory::language()->where('id', $parent_id)->first();
                if ($category && $category->parent_id) {
                    array_push($array, $category->id);
                    $parent_id = $category->parent_id;
                } else {
                    array_push($array, $category->id);
                    break;
                }
            }

            return ProductCategory::language()->findMany($array);
        } else {
            return ProductCategory::language()->findMany($category);
        }
    }

    public function getSubCategorise($category_id)
    {
        if ($category_id == 0) {
            $category_id = null;
        }
        return ProductCategory::language()
            ->tree()
            ->where('parent_id', $category_id)
            ->where('status', 'active')->where('is_delete', '0')
            ->get()
            ->toTree();
    }

    public function category($category_id)
    {
        if ($category_id == '0') {
            $category_id = null;
        }

        $products = $this->getProducts($category_id);

        $category = ProductCategory::language()->where('id', $category_id)->first();

        $categorise =  $this->getSubCategorise($category_id);

        $path_categorise = $this->getPathCategoise($category);

        return view('Website.customer.category', compact(['category', 'products', 'categorise', 'path_categorise']));
    }

    public function getProducts($category_id)
    {
        $products = Product::language()
            ->where('product_category', $category_id)
            ->where('is_delete', '0')
            ->paginate(20);


        if ($category_id == null) {
            $products = Product::language()
                ->where('is_delete', '0')
                ->paginate(20);
            return $products;
        }

        if (!$products->count()) {
            $sub_categorise =  $this->getSubCategorise($category_id)->pluck('id')->toArray();
            $products = Product::language()
                ->where('is_delete', '0')
                ->mainCategoriesProducts($sub_categorise)
                ->paginate(20);
        }

        return $products;
    }

    public function singleProduct($product_id)
    {
        $product = Product::language()
            ->with(['comments', 'rates', 'category', 'relatedProducts', 'colors'])
            ->where('id', $product_id)
            ->first();

        $categorise =  $this->getSubCategorise($product->category->id);

        $path_categorise = $this->getPathCategoise($product->category);

        return view('Website.customer.single-product', compact(['product', 'categorise', 'path_categorise']));
    }

    public function addComment(Request $request, $product_id)
    {
        ProductComment::create([
            'product_id' => $product_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
            'status' => 'active',
            'is_delete' => '0'
        ]);

        session()->flash('success', 'Comment has been add successfully!!');
        return redirect()->back();
    }
}
