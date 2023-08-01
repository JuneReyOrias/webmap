<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    use HasFactory;
    
    public function VariableCost(){
        return$this->hasOne(\app\VariableCost::class);
    }

}
