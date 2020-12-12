<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatePhoto extends Model
{
    use HasFactory;
    public function estates(){
        return $this->belongsTo(estate::class);
    }
}
