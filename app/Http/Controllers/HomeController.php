<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use App\Models\Prouducts;

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
       // $inv=Invoices::all();
        $prducts= Prouducts::all();
        return view('home',compact('prducts'));
    }
}
