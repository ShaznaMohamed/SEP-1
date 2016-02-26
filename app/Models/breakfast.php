<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Breakfast extends Model
{
    protected $table = 'breakfast';

    protected $fillable = [
        'type',
        'details',
        'price',
        'b_id',
    ];
}
