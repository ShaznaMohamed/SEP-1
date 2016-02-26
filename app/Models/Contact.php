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

class Contact extends Model
{

    protected $table = 'contact';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'message',
    ];
}
