<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Roomassistant extends Model
{

    protected $table = 'roomassistant';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'room',
        'status',


    ];


}


