<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sell(){
        return view('product.sell');
    }
    public function store(Request $request){

       $product = Product::create(
        [
            'name'=>$request->name,
            'item'=>$request->item,
            'description'=>$request->description,
            'price'=>$request->price,
        ]
        );

       return redirect (route('sell'));
    }
    public function index (){

        $products = Product::all();
        return view('products', compact('products'));
    }
}
