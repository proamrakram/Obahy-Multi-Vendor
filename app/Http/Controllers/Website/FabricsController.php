<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FabricsController extends Controller
{
    public function suppliers()
    {
        return view('Website.fabrics.suppliers');
    }

    public function fabrics()
    {
        return view('Website.fabrics.fabrics');
    }

    public function fabricDetails()
    {
        return view('Website.fabrics.details');
    }
}
