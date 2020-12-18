<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function projects(){
        return $this->belongsTo(Project::class);
    }
    public function estate_photos(){
        return $this->hasMany(EstatePhoto::class);
    }
}
