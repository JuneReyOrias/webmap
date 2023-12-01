<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorize extends Model
{
    use HasFactory;
    protected $fillable=[
        // 'user_id',
        'agri_districts_id',
        'crop_categorys_id',
        'cat_name',
        'cat_descript',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id' )->withDefault();
    }
    public function agridistricts ()
    {
        return $this->belongsTo(AgriDistrict::class,'agri_district_id','id')->withDefault();
    }
    public function Cropcategory ()
    {
        return $this->hasMany(CropCategory::class,'id','categprizes_id')->withDefault();
    }
    public function Fisheriescategory ()
    {
        return $this->hasMany(FisheriesCategory::class,'id','categprizes_id')->withDefault();
    }
    public function livestockcategory ()
    {
        return $this->hasMany(livestockCategory::class,'id','categprizes_id')->withDefault();
    }
}
