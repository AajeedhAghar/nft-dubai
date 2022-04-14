<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePlan extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

    public function plan()
    {
        return $this->belongsTo('App\Plan');
    }

}
