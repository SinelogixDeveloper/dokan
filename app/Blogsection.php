<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blogsection extends Model
{
    use HasTranslations;
    public $translatable = ['blogsection_title'];

    protected $fillable = [
        'blogsection_title','product_id','blogsection_status'
    ]; 

    public function Product()
    {
        return $this->hasMany('App\Product');
    }

}
