<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'categorize_id',
        'livestock_category_id',
        'livestock_name',
        'breed',
        'age',
        'gender',
        'livestock_description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'users_id', )->withDefault();
    }
    public function categorize()
    {
        return $this->belongsTo(Categorize::class,'categorizes_id','id');
    }
    public function livestockcategory()
    {
        return $this->belongsTo(Livestock::class,'livestock_categorys_id','id');
    }

}  
