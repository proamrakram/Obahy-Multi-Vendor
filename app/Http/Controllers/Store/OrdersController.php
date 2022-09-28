<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('Store.orders.index');
    }

    public function ordersServices()
    {
        return view('Store.orders.order-services');
    }


    public function create()
    {
        dd("Create Order Page");
    }

    public function store()
    {
        dd("Store Order");
    }
}
