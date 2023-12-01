<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CropCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'agri_district_id',
        'categorize_id',
        'crop_name',
        'crop_descript',
        
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id', )->withDefault();
    }
    public function agridistricts()
    {
        return $this->belongsToe(AgriDistrict::class,'agri_district_id','id')->withDefault();;
    }
    public function categorizes()
    {
        return $this->belongsTo(Categorize::class,'categorize_id','id')->withDefault();;
    }
    public function crop()
    {
        return $this->hasMany(Crop::class,'id','crop_categorys_id');
    }
}
