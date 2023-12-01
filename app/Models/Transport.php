<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_of_vehicle',
        'type_of_vehicle',
        'total_transport_per_deliverycost',
    ]; public function variablecost()
    {
        return $this->belongsTo(VariableCost::class, 'id','transports_id');
    }
}
