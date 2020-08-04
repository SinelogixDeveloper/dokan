<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientlogo extends Model
{
    protected $fillable = [

        'logo_url', 'logo_grey_images','logo_org_images'

    ];
}
