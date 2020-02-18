<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
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
        $product=Product::paginate(9); 
        return view('home',compact('product'));
    }
    public function getBH()
    {
        // if($category=='bh')
        $product=Product::where('productcode','BH')->paginate(9);
        return view('category.bh',compact('product')); 
    }
    public function getCH()
    {
        // if($category=='bh')
        $product=Product::where('productcode','CH')->paginate(9);
        return view('category.ch',compact('product')); 
    }
    public function getLH()
    {
        // if($category=='bh')
        $product=Product::where('productcode','LH')->paginate(9);
        return view('category.lh',compact('product')); 
    }
}
