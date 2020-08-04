<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

//use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function getCategory(){

     $records = DB::table('categories')->select('category_name','sub_category_name','category_description','cat_badge')->orderBy('id', 'asc')->get()->toArray();

     return $records;
   }
}
