<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaCaluclate extends Model
{
    protected $fillable = [
        'name',
        'total_area',
        'licence_id',
    ];

    public function licence()
    {
        return $this->belongsTo('App\Licence', 'licence_id');
    }
}
