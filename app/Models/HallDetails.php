<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class HallDetails extends Model
{
    protected $table = 'halldetails';

    protected $fillable = [
        'topic',
        'value',
    ];
}
