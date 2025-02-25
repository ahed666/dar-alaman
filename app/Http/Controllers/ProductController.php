<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function show($slug){

        

       $product=Product::where('slug',$slug)->with('category')->with('brand')->first();
       $product->images = json_decode( $product->images, true); // Decode as an associative array
        
       return view('product',compact('product'));
    }
}
