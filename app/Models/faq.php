<?php

namespace App\Models;

use Illuminate\Auth\Athenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Faq extends Model
{
    protected $table = 'faq';

    protected $fillable = [
        'faqid`',
        'question',
        'answer',
    ];
}
