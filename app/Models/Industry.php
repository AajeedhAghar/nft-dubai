<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $guarded = [];

    use HasFactory;
 
    public function industryProfile()
    {
        return $this->hasMany('App\IndustryProfile');
    }

}