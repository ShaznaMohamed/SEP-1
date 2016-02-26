<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserAdmin extends Model
{
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password', 'address1','address2','address3','mobile'];

}
