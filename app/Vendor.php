<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{

	use Notifiable;

    protected $table = 'vendors';

     protected $fillable = [

        'name', 'email','email_verified_at','password','vendor_image','vendor_status'

    ]; 

    protected $hidden = [
        'password', 'remember_token',
    ];
}
