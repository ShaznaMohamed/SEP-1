<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Lunch extends Model
{
    protected $table = 'lunch';

    protected $fillable = [
        'type',
        'details',
        'price',
        'id',
    ];
}
