<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    public function showByCategory($slug){

        $category = Category::where('slug',$slug)->with('products')->first();
        
            return view('products',compact('category'));
        

    }

    public function showByBrand($slug){

        $category = Brand::where('slug','=',$slug)->with('products')->first();
        
            return view('products',compact('category'));
        // }

    }
}
