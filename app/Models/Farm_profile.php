<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Farm_profile extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function farmers()
    {
     return$this->hasOne(\app\farmers::class);
    }
}
