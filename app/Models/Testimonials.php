<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Testimonials extends Model
{
    protected $table = 'testimonials';

    protected $fillable = [
        'email',
        'name',
        'location',
        'title',
        'message',
    ];
}
