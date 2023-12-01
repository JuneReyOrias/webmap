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
 
//  protected $guarded = [];
    protected $fillable=[
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
   ' personal_information_id',
  'tenurial_status',
  'rice_farm_address',
   'no_of_years_as_farmers',
   'gps_longitude',
   'gps_latitude',
   'total_physical_area_has',
   'rice_area_cultivated_has',
  'land_title_no',
  'lot_no',
  'area_prone_to',
  'ecosystem',
  'type_rice_variety',
  'prefered_variety',
  'plant_schedule_wetseason',
  'plant_schedule_dryseason',
  'no_of_cropping_yr',
    'yield_kg_ha',
  'rsba_register',
  'pcic_insured',
  'source_of_capital',
  'remarks_recommendation',
  'oca_district_office',
  'name_technicians',
  'date_interview',
//   'user_id', 
//   'personal_informations_id',
    ];

//    protected $fillable=['farm_no'];
public function user()
{
    return $this->belongsTo(User::class,'user_id', )->withDefault();
}
public function personalInformations()
{
    return $this->belongsTo(PersonalInformations::class, 'personal_information_id','id')->withDefault();
}
    public function agridistricts()
    {
        return $this->belongsTo(AgriDistrict::class,'agri_district_id','id');
    }
    public function fixedcost()
    {
        return $this->hasMany(FixedCost::class,'id','farm_profiles_id');
    }
    public function machineriesuseds()
    {
        return $this->hasMany(MachineriesUseds::class,'id','farm_profiles_id');
    }
    public function machineriesused()
    {
        return $this->hasMany(MachineriesUsed::class,'id','farm_profiles_id');
    }
    public function variablecost()
    {
        return $this->hasMany(VariableCost::class,'id','farm_profiles_id');
    }
    public function seeds()
    {
        return $this->hasMany(Seed::class,'id','farm_profiles_id');
    }
    public function fertilizer()
    {
        return $this->hasMany(Fertilizer::class,'id','farm_profiles_id');
    }
    public function labor()
    {
        return $this->hasMany(Labor::class,'id','farm_profiles_id');
    }
    public function pesticide()
    {
        return $this->hasMany(Pesticide::class,'id','farm_profiles_id');
    }
    public function transport()
    {
        return $this->hasMany(Transport::class,'id','farm_profiles_id');
    }
    // public function getPersonalInformationsPrimaryKey()
    // {
    //     $personalInformations = $this->personalInformations;

    //     return $personalInformations ? $personalInformations->getPrimaryKey();
    // }
    // public function farm_profiles(){
    //     return $this->belongsTo(FarmProfile::class,'farm_profiles_id', )->withDefault();
    // }
    // protected static function boot()
    // {
    //     parent::boot();

    //     // Listen for the 'created' event
    //     static::created(function ($farmProfile) {
    //         // Automatically fetch the related PersonalInformation
    //         $farmProfile->load('personalInformations');
    //     });
    // }
}
