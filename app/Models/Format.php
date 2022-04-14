<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;
    protected $guarded = [];
  

    public function Franchise()
    {
        return $this->belongsTo('App\Franchise');
    }

    

}
