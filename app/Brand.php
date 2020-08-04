<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Brand extends Model
{
    use HasTranslations;
    public $translatable = ['name'];

    protected $fillable = [
        'name', 'image', 'status'
    ];

    /*
    @author    :: Tejas
    @task_id   :: brand to product relationship
    @task_desc :: 
    @params    :: 
   */
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
