<?php
/**
 * Created by PhpStorm.
 * User: chama
 * Date: 1/30/2016
 * Time: 10:27 PM
 */

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