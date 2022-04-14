<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

      
    public function advisor()
    {
        return $this->hasOne(Advisor::class);
    }

    public function business()
    {
        return $this->hasOne(Business::class);
    }
    
    public function franshise()
    {
        return $this->hasOne(Franshise::class);
    }
    public function investor()
    {
        return $this->hasOne(Investor::class);
    }
   

    public function socialmedia()
    {
        return $this->hasOne(SocialMedia::class);
    }
   

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }
    
    public function files()
    {
        return $this->hasMany(File::class );
    }
    public function industryProfiles()
    {
        return $this->hasMany(IndustryProfile::class);

    }
    public function profilePlans()
    {
        return $this->hasMany(ProfilePlan::class);
    }

  
   

//   public function products()
//     {
//         return $this->belongsToMany(Product::class, 'product_categories', 'category_url', 'product_id');
//     }



}
