<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Store;
use App\Models\StorePackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorise = ProductCategory::root()->get();
        $new_products = Product::language()->latest()->with(['rates'])->take(6)->get();
        $custom_made_products = Product::language()->where('product_type', 'custom_made')->latest()->with(['rates'])->take(3)->get();
        $advertisements = Advertisement::where('store_id', '0')->where('status', 'active')->where('is_delete', '0')->get();
        $center_top = $advertisements->where('ads_place', 'center_top')->first();
        $center_bottom = $advertisements->where('ads_place', 'center_bottom')->first();
        $right_top = $advertisements->where('ads_place', 'right_top');
        $left = $advertisements->where('ads_place', 'left')->first();
        return view('Website.Customer.home', compact(['categorise', 'new_products', 'custom_made_products', 'advertisements', 'center_top', 'center_bottom', 'right_top', 'left']));
    }

    public function loandingHome()
    {
        $store_packages = StorePackage::language()->get();
        return view('Website.Customer.loanding-home', [
            'store_packages' => $store_packages
        ]);
    }

    public function profileOrders()
    {
        return view('Website.Customer.profile-orders');
    }

    public function profileRequiredServices()
    {
        return view('Website.Customer.profile-required-services');
    }

    public function createStorePage(Request $request)
    {
        $email = $request->email;
        return view('Website.Customer.create-store', compact(['email']));
    }

    public function createStore(Request $request)
    {
        $input = $request->all();
        $input['store_slug'] = Str::slug($request->store_slug);

        Validator::make($input, [
            "store_title" => ['required', 'string'],
            "store_slug" => ['required', 'string', 'max:255', 'unique:stores,slug'],
            "entity_type" => ['required', 'in:fabrics,clothes'],
            "commercial_registration_link" => ['required', 'string'],
            "registration_number_in_trusted" => ['required', 'string'],
            "id_number" => ['required', 'string'],
            "store_manager" => ['required', 'string'],
            "phone_number" => ['required', 'string'],
            "email" => ['required', 'string'],
            "password" => ['required'],
            "password_confirmation" => ['required'],
        ]);

        Store::create([

        ]);
    }
}
