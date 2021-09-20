<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable=[
        'buildingId',
        'floorId',
        'shopNumber',
        'shopHeight',
        'shopWidth',
        'status',
    ];
    public function building(){
        return $this->belongsTo(Building::class, 'buildingId', 'id');
    }
    public function floor(){
        return $this->belongsTo(Floor::class, 'floorId', 'id');
    }
}
