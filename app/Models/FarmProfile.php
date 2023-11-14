<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmProfile extends Model
{
    use HasFactory;
//   protected $fillable=[
//     'tenurial_status',
//     'rice_farm_address',
//     'no_of_years_asfarmers',
//     'gps_longitude',
//     'gps_latitude',
//     'total_physical_area_has',
//   ];
    // public function PersonalInformation(){
    //     return$this->hasOne(\app\PersonalInformations::class);
    // }
    
 protected $table='farm_profiles';
 protected $guarded = [];
    // protected $fillale=[
    //    'farmno_id',
    //    'farmer_no',

    //       'seeds_typed_used',
    //        'seeds_used_in_kg',
    //       'seed_source',
    //        'no_of_fertilizer_used_in_bags',
    //        'no_of_pesticides_used_in_l_per_kg',
    //        'no_of_insecticides_used_in_l',
    //       'area_planted',
    //       'date_planted',
    //       'date_harvested',
    //        'yield_tons_per_kg',
    //        'unit_price_palay_per_kg',
    //        'unit_price_rice_per_kg',
    //       'type_of_product',
    //       'sold_to',
    //       'if_palay_milled_where',
    //        'gross_income_palay',
    //        'gross_income_rice',
    // ];
//    protected $fillable=['farm_no'];
    public function PersonalInformations(){
        return $this->belongsTo(FarmProfile::class, 'farmer_no');
    }
}
