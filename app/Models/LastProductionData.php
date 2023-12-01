<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LastProductionData extends Model
{
    use HasFactory;
    protected $fillable=[
        'personal_informations_id',
        'farm_profiles_id',
        'agri_districts_id',
        'seeds_typed_used',
        'seeds_used_in_kg',
        'seed_source',
        'no_of_fertilizer_used_in_bags',
        'no_of_fertilizer_used_in_bags',
        'no_of_insecticides_used_in_l',
        'area_planted',
        'date_planted',
        'date_harvested',
        'yield_tons_per_kg',
        'unit_price_palay_per_kg',
        'unit_price_rice_per_kg',
        'type_of_product',
        'sold_to',
        'if_palay_milled_where',
        'gross_income_palay',
        'gross_income_rice',
    ];
    public function farmprofiles()
    {
        return $this->belongsTo(FarmProfile::class, 'farm_profiles_id','id')->withDefault();
    }
}
