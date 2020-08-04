<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usermanagement extends Model
{
    protected $fillable = [

        'user_name', 'user_email','user_password','user_mobile','profile_images'

    ];
}
