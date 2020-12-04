<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyPhone extends Model
{
    use HasFactory;
    public function companies(){
        return $this->BelongsTo('App\Models\Company');
    }
}
