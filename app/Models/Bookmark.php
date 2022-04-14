<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }


//     public function children()
//     {
//         return $this->hasMany(Category::class, 'parent_id', 'id');
//     }


  public function products()
    {
        return $this->belongsToMany(Product::class, 'product_categories', 'category_url', 'product_id');
    }




}
