<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'router_id',
        'pool_id',
        'bandwidth_id',
        'price',
        'discount',
        'validity',
        'validity_unit',
        'seller_id',
        'is_display',
        'is_active'
    ];

    public function bandwidth()
    {
        return $this->hasOne('App\Models\Bandwidth','id','bandwidth_id');
    }
    
    public function router()
    {
        return $this->hasOne('App\Models\Router','id','router_id');
    }

}
