<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgriDistrict extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'district',
        'description',
        'latitude',
        'longitude',

    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id' )->withDefault();
    }
    public function categorizes()
    {
        return $this->hasOne(Categorize::class,'id','agri_districts_id' );
    }
    public function polygon()
    {
        return $this->hasOne(Polygon::class,'id','agri_districts_id' );
    }
    public function farmprofile()
    {
        return $this->hasOne(FarmProfile::class,'id','agri_districts_id' );
    }
}
