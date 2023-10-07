<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgricDistrict extends Model
{
    use HasFactory;
    protected $fillable=[
        'assign_id',
        'district',
        'description',
    ];
}