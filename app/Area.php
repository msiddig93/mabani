<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'name',
    ];

    public function districts()
    {
        return $this->hasMany('App\District','area_id','id');
    }
    
}