<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = [

        'vendor_id', 'not_msg','not_status','product_id'

    ];
}
