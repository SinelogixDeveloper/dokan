<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useraddress extends Model
{
    protected $fillable = [

        'user_id', 'name','mobile','country','zip_code','city','address','make_it_default'
    ];
}
