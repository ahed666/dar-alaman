<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Catrgory;
use App\Models\Brand;
class Product extends Model
{
    protected $table="products";

    // protected $casts = [
    //     'images' => 'array',
    // ];
    public function Category(){
        return $this->belongsTo(Category::class, 'id');

    }

    public function Brand(){
        return $this->belongsTo(Brand::class, 'id');

    }
}
