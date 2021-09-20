<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable =[
        'tenantName',
        'tenantEmail',
        'tenantPhoneNumber',
        'tenantNID',
        'buildingId',
        'floorId',
        'shopId',
        'rentId',
        'status',
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
    public function rent(){
        return $this->belongsTo(Rent::class, 'rentId', 'id');
    }
}
