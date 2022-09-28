<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->user_type == 'admin' || auth()->user()->user_type == 'admin_employee') {

            return redirect()->route('admin.home.index');
        }

        if (auth()->user()->user_type == 'store_admin' || auth()->user()->user_type == 'store_employee') {

            return redirect()->route('store.home.index');
        }

        if (auth()->user()->user_type == 'customer') {
            return redirect()->route('customer.home-page');
        }

        if (auth()->user()->user_type == 'appearance_expert') {
            return redirect()->route('appearance_expert.home-page');
        }

        return redirect()->route('loanding-home');
    }

    public function adminHome()
    {
        return view('AdminPanel.home');
    }

    public function storeHome()
    {
        return view('Store.home');
    }
}
