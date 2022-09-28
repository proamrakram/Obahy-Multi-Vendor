<?php

namespace App\Http\Controllers\Store;

use App\Models\StorePackage;
use App\Http\Controllers\Controller;

class PackagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Store.packages.index');
    }
}
