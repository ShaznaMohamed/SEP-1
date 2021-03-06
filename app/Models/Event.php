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
        'title',
        'first_name',
        'venue',
        'pax',
        'arrival_date',
        'start',
        'end',
        'contact_number',
        'type_of_event',
        'preferred_time',
        'email',
        'type',
        'event_handler',
        'h_email'

    ];



}
