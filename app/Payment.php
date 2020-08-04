<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //
    protected $fillable = [
        'bank_name','branch_name','ac_number','bank_ifsc_code','ac_holder_name','created_by','created_by_name'
    ];
}
