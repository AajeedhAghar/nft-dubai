<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;


    protected $guarded = [];
    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function format()
    {
        return $this->hasMany(Format::class);

        
    }
}
