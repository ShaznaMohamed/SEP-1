<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Roomreservation extends Model
{

    protected $table = 'roomreservation';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'noofrooms',
        'arrival',
        'departure',
        'roomtype',
        'message',
        'adult',
        'children',


    ];


}


