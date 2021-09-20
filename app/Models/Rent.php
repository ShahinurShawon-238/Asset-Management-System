<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable=[
        'buildingId',
        'floorId',
        'shopId',
        'rent',
    ];
    public function building(){
        return $this->belongsTo(Building::class, 'buildingId', 'id');
    }
    public function floor(){
        return $this->belongsTo(Floor::class, 'floorId', 'id');
    }
    public function shop(){
        return $this->belongsTo(Shop::class, 'shopId', 'id');
    }
}
