<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class packageModel extends Model 
{

    protected $table = 'packages';

    protected $fillable = [
        'package_name',
        'package_type',
        'price',
        'descript',
        'start_date',
        'end_date',


    ];



}
