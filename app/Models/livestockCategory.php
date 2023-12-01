<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livestockCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'agri_district_id',
        'categorize_id',
        'livestock_category_name',
        'livestock_description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'uses_id', )->withDefault();
    }
    public function agridistricts()
    {
        return $this->belongsTo(AgriDistrict::class,'agri_districts_id','id');
    }
    public function categorize()
    {
        return $this->belongsTo(Categorize::class,'categorizes_id','id');
    }
}
