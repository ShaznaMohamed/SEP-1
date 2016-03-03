<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Dinner extends Model
{
    protected $table = 'dinner';

    protected $fillable = [
        'type',
        'details',
        'price',
        'id',
    ];
}
