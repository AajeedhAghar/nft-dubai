<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function profile()
    {
        return $this->hasMany('App\Profile');
    }

    public function bookmark()
    {
        return $this->hasMany('App\Bookmark');
    } 
    
  
    protected $guarded = [];
 
   
      
    protected $hidden = [
        'password',
        'remember_token',
        'fb_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}