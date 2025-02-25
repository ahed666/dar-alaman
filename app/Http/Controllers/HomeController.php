<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Slider;
class HomeController extends Controller
{
    
    public function home(){

        $latestProducts=Product::latest()->take(8)->get();
        
        $sliders=Slider::all();
       
        
        
        return view('home',compact('latestProducts','sliders'));

    }

    
}
