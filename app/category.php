<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class category extends Model
{
    //
	use HasTranslations;
    public $translatable = ['category_name','parent_category'];

    protected $fillable = [

        'category_name','parent_category','sub_category_name','badgestyle','category_description','cat_badge','displaymode','cat_mall','alias','pagesizeoptions','pagesize','category_images','cat_status'

    ]; 
}
