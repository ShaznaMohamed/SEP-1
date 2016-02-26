<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Room extends Model
{

    protected $table = 'room';

    protected $fillable = [
        'roomtype',
        'price',
        'wifi',
        'airconditioned',
        'cabletv',
        'telephone',
        'diningtable',

    ];


}


