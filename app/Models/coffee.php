<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Coffee extends Model
{
    protected $table = 'coffee';

    protected $fillable = [
        'type',
        'details',
        'price',
        'id',
    ];
}
