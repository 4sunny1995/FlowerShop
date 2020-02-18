<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function AddItem(Request $request){
        // dd($request);
        $product=Product::where('id',$request->id)->first();
        $item=[
            'product'=>$product,
            'quantity'=>1,
        ];
        session()->push('CartItem',$item);
        return $product->name;
    }
}
