<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licence extends Model
{
    protected $fillable = [
        'owner_name',
        'phone',
        'purpose_id',
        'district_id',
        'land_number',
        'part',
        'certificate',
        'prototype',
        'blueprint',
        'status',
    ];

    
    public function district()
    {
        return $this->belongsTo('App\District', 'district_id');
    }

    
    public function purpose()
    {
        return $this->belongsTo('App\Purpose', 'purpose_id');
    }

    
    public function reports()
    {
        return $this->hasMany('App\Report', 'licence_id');
    }

    public function area_caluclates()
    {
        return $this->hasMany('App\AreaCaluclate', 'licence_id');
    }
    
}
