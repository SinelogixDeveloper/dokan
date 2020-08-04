<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Subbanner extends Model
{
	use HasTranslations;
    public $translatable = ['subbannertitle','subbannerdiscription'];
    protected $fillable = [

        'subbannertitle', 'subbannerdiscription','subbannerurl','subbannerimages'

    ];
}
