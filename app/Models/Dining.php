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

class Dining extends Model
{

    protected $table = 'dining';

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'arrival_date',
        'arrival_time',
        'arrival_adults',
        'arrival_children',
        'notes',
        'type'

    ];



}
