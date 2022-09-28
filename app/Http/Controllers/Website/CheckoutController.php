<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Collection;

class CheckoutController extends Controller
{
    public function index()
    {
        $customer  = auth()->user();

        $cartitems = Cart::content();

        if ($customer) {
            if ($customer->user_type = "customer") {
                $cartitem_check = Cart::restore($customer->id);
                if ($cartitem_check) {
                    $cartitems = $cartitem_check;
                }
            }
        }

        $products = Product::findMany($cartitems->pluck('id')->toArray());

        return view('Website.customer.checkout', compact(['cartitems', 'products']));
    }
}
