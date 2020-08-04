<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendornoti extends Model
{
    //
    protected $fillable = [

        'vendor_id', 'vendor_not_msg','admin_comment','vendor_not_status','product_id'

    ];
}
