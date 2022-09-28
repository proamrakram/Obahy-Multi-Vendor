<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FashionDesignersController extends Controller
{

    public function superModel()
    {
        return view('Website.Fashion-designers.super-model');
    }
    public function superModelDetails()
    {
        return view('Website.Fashion-designers.super-model-details');
    }
    public function storeFashionDesigners()
    {
        return view('Website.Fashion-designers.store-fashion-designers');
    }
    public function storeFashionDetails()
    {
        return view('Website.Fashion-designers.store-fashion-details');
    }
}
