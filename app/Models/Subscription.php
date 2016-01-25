<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Subscription extends Model 
{
   
    protected $table = 'subscriptions';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'province',
        'zip',
        'country',
        'email',
        'confirm_email',
        
    ];

    
    
}
