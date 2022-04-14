<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
