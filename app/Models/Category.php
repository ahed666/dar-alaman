<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="categories";


    public function products()
    {
        return $this->hasMany(Product::class,'cat_id');
    }

    // public function parent()
    // {
    //     return $this->belongsTo(self::class, 'parent_id');
    // }



    // /**
    //  * Relationship to get the child categories.
    //  */
    // public function children()
    // {
    //     return $this->hasMany(self::class, 'parent_id');
    // }
}
