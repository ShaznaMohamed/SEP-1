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
        'firstname',
        'lastname',
        'email',
        'phone',
        'city',
        'pax',
        'eventdate',
        'eventtype',
        'halltype',
        'noofrooms',
        'message',
        'sessionn',
        'flexibility',
        'status'


    ];


}


