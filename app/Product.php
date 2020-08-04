<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    public $translatable = ['product_name', 'brand_name', 'product_short_description', 'product_full_discription'];

    protected $fillable = [
        'product_name', 'product_price', 'product_qty', 'product_old_price', 'similar_product', 'product_size', 'product_offer_price', 'featured_images', 'from_date', 'to_date', 'product_short_description', 'product_full_discription', 'product_brand', 'product_images', 'product_sku', 'product_categories', 'background_color', 'product_brand', 'product_status', 'created_by', 'created_by_name'
    ];

    public function product()
    {
        return $this->belongsTo('App\Blogsection');
    }

    public function brand()
    {
        return $this->hasOne('App\Brand');
    }

    /*
    * author : Tejas Soni
    * list_belongsTo - get all table : product and brand records    
    * @param  - None        
    * @return : array of all list records
    */
    public function list_belongsTo()
    {
        $data = self::selectRaw('`products`.`id` as `prod_id`, `products`.`product_name` as `product_name`,`products`.`product_price` as `product_price`,`products`.`product_offer_price` as `product_offer_price`,`products`.`product_old_price` as `product_old_price`,`products`.`product_qty` as `product_qty`,`products`.`product_size` as `product_size`,`products`.`featured_images` as `featured_images`,`products`.`product_images` as `product_images`')
            ->selectRaw('`brands`.`id` as `brand_id`,`brands`.`name` AS `brand_name`,`brands`.`name` AS `brand_name`')
            ->leftJoin('brands', 'products.id', '=', 'brands.id')
            ->where('products.new_arrival', '1')
            ->get();
        if (!empty($data)) {
            $data = $data;
        }
        return $data;
    }
    
    public function list_best_seller()
    {
        $data = self::selectRaw('`products`.`id` as `prod_id`, `products`.`product_name` as `product_name`,`products`.`product_price` as `product_price`,`products`.`product_offer_price` as `product_offer_price`,`products`.`product_old_price` as `product_old_price`,`products`.`product_qty` as `product_qty`,`products`.`product_size` as `product_size`,`products`.`featured_images` as `featured_images`,`products`.`product_images` as `product_images`')
            ->selectRaw('`brands`.`id` as `brand_id`,`brands`.`name` AS `brand_name`,`brands`.`name` AS `brand_name`')
            ->leftJoin('brands', 'products.id', '=', 'brands.id')
            ->where('products.best_seller', '1')
            ->get();
        if (!empty($data)) {
            $data = $data;
        }
        return $data;
    }  
    
     public function list_most_rating()
    {
        $data = self::selectRaw('`products`.`id` as `prod_id`, `products`.`product_name` as `product_name`,`products`.`product_offer_price` as `product_offer_price`,`products`.`product_price` as `product_price`,`products`.`product_old_price` as `product_old_price`,`products`.`product_qty` as `product_qty`,`products`.`product_size` as `product_size`,`products`.`featured_images` as `featured_images`,`products`.`product_images` as `product_images`')
            ->selectRaw('`brands`.`id` as `brand_id`,`brands`.`name` AS `brand_name`,`brands`.`name` AS `brand_name`')
            ->leftJoin('brands', 'products.id', '=', 'brands.id')
            ->where('products.most_rating', '1')
            ->get();
        if (!empty($data)) {
            $data = $data;
        }
        return $data;
    } 
    
      public function list_best_offer()
    {
         $curr_date = date('Y-m-d');
        $data = self::selectRaw('`products`.`id` as `prod_id`, `products`.`product_name` as `product_name`,`products`.`product_price` as `product_price`, IF(UNIX_TIMESTAMP("'.$curr_date.'") < UNIX_TIMESTAMP(products.to_date),products.product_offer_price,products.product_price) as pro_price,`products`.`product_offer_price` as `product_offer_price`,`products`.`product_old_price` as `product_old_price`,`products`.`product_qty` as `product_qty`,`products`.`product_size` as `product_size`,products.to_date,`products`.`featured_images` as `featured_images`,`products`.`product_images` as `product_images`')
            ->selectRaw('`brands`.`id` as `brand_id`,`brands`.`name` AS `brand_name`,`brands`.`name` AS `brand_name`')
            ->leftJoin('brands', 'products.id', '=', 'brands.id')
            ->where('products.best_offer', '1')
            ->get();
        if (!empty($data)) {
            $data = $data;
        }
        return $data;
    }   
}
