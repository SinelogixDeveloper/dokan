<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Homebanner extends Model
{
	use HasTranslations;
    public $translatable = ['bannertitle','bannerdiscription'];
   protected $fillable = [

        'bannertitle', 'bannerdiscription','bannerurl','bannerimages'

    ];
}
