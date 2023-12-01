<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FixedCost extends Model
{
    use HasFactory;
    protected $fillable=[
        'personal_informations_id',
        'farm_profiles_id',
        'particular',
        'no_of_ha',
        'cost_per_ha',
        'total_amount',
    ];
}
