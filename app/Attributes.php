<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    protected $fillable = [

        'att_name', 'att_value','show_pro_page','assign_to'

    ]; 
}
