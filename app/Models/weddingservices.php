<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Weddingservices extends Model
{

    protected $table = 'weddingservices';

    protected $fillable = [
        'halltype',
        'advancepayment',
        'minimumpax',
        'additionalhour',
        'fullpayment',
        'corkage',
        'beerlocal',
        'icedcoffee',
        'cutlery',

    ];


}


