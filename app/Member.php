<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'email', 'password', 'api_token', 'isAdmin',
    ];
}
