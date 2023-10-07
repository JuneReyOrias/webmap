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
   protected $guarded=[];
}
