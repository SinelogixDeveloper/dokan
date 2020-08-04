<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Promobanner extends Model
{
    use HasTranslations;
    public $translatable = ['promobanner_title','promobanner_discription'];
   	protected $fillable = [

        'promobanner_title', 'promobanner_discription','promobanner_url','promobanner_images'

    ];
}
