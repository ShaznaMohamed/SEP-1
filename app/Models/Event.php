<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Event extends Model
{

    protected $table = 'events';

    protected $fillable = [
        'first_name',
        'last_name',
        'venue',
        'pax',
        'period',
        'contact_number',
        'type_of_event',
        'preferred_time',
        'email',
        'confirm_email',

    ];



}
