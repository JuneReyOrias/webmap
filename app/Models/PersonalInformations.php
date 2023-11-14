<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FarmProfile;
class PersonalInformations extends Model
{
    use HasFactory;
 protected $table ='personal_informations';
 protected $primarykey ='farmer_no';
    protected $guarded=[];
    public function FarmProfile(){
        return$this->hasMany(FarmProfile::class);

    }
    public function VariableCost(){
        return$this->hasOne(\app\VariableCost::class);
    }
    public function FixedCost(){
        return$this->hasOne(\app\FixedCost::class);
    }
    public function LastProduction(){
        return$this->hasOne(\app\LastProduction::class);
    }
    public function MachineriesUsed(){
        return$this->hasMany(\app\MachineriesUsed::class);
    }
    public function LastProductionData(){
        return$this->hasMany(\app\LastProductionData::class);
}

}
