<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryProfile extends Model
{
    protected $guarded = [];

    use HasFactory;
    
    public function industry()
    {
        return $this->belongsTo('App\Industry');
    }

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }


}
