<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreYourDesignersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeYourDesigners()
    {
        return view('Website.store-your-designers.index');
    }

    public function storeYourDesignersDetails()
    {
        return view('Website.store-your-designers.details');
    }

    public function sizeDetails()
    {
        return view('Website.store-your-designers.siz-details');
    }

    public function TrousersShirtSizes()
    {
        return view('Website.store-your-designers.trousers-shirt-sizes');
    }

    public function abayaSizes()
    {
        return view('Website.store-your-designers.abaya-sizes');
    }

    public function jalabiyaSizesMen()
    {
        return view('Website.store-your-designers.jalabiya-sizes-men');
    }

    public function jalabiyaSizesBoys()
    {
        return view('Website.store-your-designers.jalabiya-sizes-boys');
    }

    public function menSuitSizes()
    {
        return view('Website.store-your-designers.men-suit-sizes');
    }

    public function sizesGirl()
    {
        return view('Website.store-your-designers.sizes-girl');
    }
}
