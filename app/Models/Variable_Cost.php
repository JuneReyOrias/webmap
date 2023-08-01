<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variable_Cost extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function PersonalInformation(){
        return$this->hasOne(\app\PersonalInformationS::class);
    }
}
