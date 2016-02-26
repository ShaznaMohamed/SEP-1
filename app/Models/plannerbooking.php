<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class plannerbooking extends Model
{

    protected $table = 'plannerbooking';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'planner',
        'status',



    ];


}


