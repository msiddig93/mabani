<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'client_name',
        'account_no',
        'balance',
    ];
}
