<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessSubCategory extends Model
{
    //
    protected $fillable = [

        'business_subcategory_name', 'business_category','business_subcategory_status'

    ]; 
}
