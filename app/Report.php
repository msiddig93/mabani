<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'clause',
        'note',
        'status',
        'licence_id',
    ];
}
