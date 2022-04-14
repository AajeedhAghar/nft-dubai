<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    // public $fillable = ['user_id','name', 'email','country_code', 'phone', 'interests', 'investor_role','industries','interested_locations','investment_min','investment_max','location','company_name','designation','website','factors','company_description','business_proof_doc'];

    protected $guarded = [];
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }

}
