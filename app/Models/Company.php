<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function users(){
        return $this->belongsTo('App\Models\Company'); //ONE TO ONE between company and User
    }
    public function social_media(){
        return $this->hasMany('App\Models\SocialMedia'); //ONE TO ONE between company and User
    }
    public function company_phones(){
        return $this->hasMany('App\Models\CompanyPhone');
    }
    public function projects(){
        return $this->hasMany('App\Models\Project');
    }
    public function estates(){
        return $this->hasMany('App\Models\Project');
    }
    public function addresses(){
        return $this->hasMany(Address::class);
    }


}

