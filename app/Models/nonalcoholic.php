<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Nonalcoholic extends Model
{
    protected $table = 'nonalcoholic';

    protected $fillable = [
        'type',
        'details',
        'price',
        'id',
    ];
}
