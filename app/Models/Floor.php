<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;
    protected $fillable=[
        'buildingId',
        'floorNumber',
        'floorHeight',
        'floorWidth',
    ];
    public function building(){
        return $this->belongsTo(Building::class, 'buildingId', 'id');
    }
}
