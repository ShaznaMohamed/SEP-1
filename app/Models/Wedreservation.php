<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Wedreservation extends Model
{

    protected $table = 'wedreservation';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'pax',
        'arrival',
        'departure',
        'halltype',
        'message',
        'sessionn',
        'flexibility',


    ];


}


