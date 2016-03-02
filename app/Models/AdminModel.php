<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class AdminModel extends Model
{
    protected $table = 'users';

    protected $fillable = ['first', 'last', 'email', 'password', 'address1','address2','address3','mobile', 'is_admin'];

}
