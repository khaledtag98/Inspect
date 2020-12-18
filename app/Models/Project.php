<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    protected $fillable =["name","description","address", "company_id"];
    public function companies(){
        return $this->belongsTo(Company::class);
    }
    public function estates(){
        return $this->hasMany(estate::class);
    }
}
