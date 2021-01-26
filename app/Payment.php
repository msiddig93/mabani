<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'client_name',
        'from',
        'to',
        'licence_id',
        'amount',
    ];
}
