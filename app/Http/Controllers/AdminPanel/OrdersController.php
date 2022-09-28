<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        return view('AdminPanel.orders.index');
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
