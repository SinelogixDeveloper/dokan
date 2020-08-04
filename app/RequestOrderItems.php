<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestOrderItems extends Model
{
     /**
   * The table associated with the model.
   *
   * @var string
   */
  public $table = 'request_order_items';

  /**
   * The primary key associated with the table.
   *
   * @var string
   */
  protected $primaryKey = 'id';

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */


 
  public $timestamps = true;

      public function list_all_join($order_id)
  		{
    	$data = self::selectRaw('`request_order_items`.`id` as `id`,`request_order_items`.`order_id` as `order_id`,`request_order_items`.`pro_id` as `pro_id`,`request_order_items`.`request_product_name` as `request_product_name`,`request_order_items`.`request_product_size` as `request_product_size`,`request_order_items`.`request_product_color` as `request_product_color`,`request_order_items`.`request_product_price` as `request_product_price`,`request_order_items`.`request_product_qty` as `request_product_qty`,`request_order_items`.`seller_id` as `seller_id`')
    		->selectRaw('`comissions`.`id` as `com_id`,`comissions`.`vendor_id` as `com_vendor_id`,`comissions`.`comission` as `com_percnt`')
        ->selectRaw('`products`.`featured_images` as `featured_images`')
        ->selectRaw('`vendors`.`id` as `ven_id`,`vendors`.`name` as `name`')
    		->leftJoin('comissions','request_order_items.seller_id','=','comissions.vendor_id')
        ->leftJoin('vendors','request_order_items.seller_id','=','vendors.id')
        ->leftJoin('products','request_order_items.pro_id','=','products.id')
    		->where('request_order_items.order_id',$order_id)
    		 ->get();
		    if (!empty($data)) {
		      $data = $data->toArray();
		    }
		    return $data;

	}

  public function list_all_joinforreports($order_id,$seller_id)
      {
      $data = self::selectRaw('`request_order_items`.`id` as `id`,`request_order_items`.`order_id` as `order_id`,`request_order_items`.`pro_id` as `pro_id`,`request_order_items`.`request_product_name` as `request_product_name`,`request_order_items`.`request_product_price` as `request_product_price`,`request_order_items`.`request_product_qty` as `request_product_qty`,`request_order_items`.`seller_id` as `seller_id`')
        ->selectRaw('`comissions`.`id` as `com_id`,`comissions`.`vendor_id` as `com_vendor_id`,`comissions`.`comission` as `com_percnt`')
        ->selectRaw('`vendors`.`id` as `ven_id`,`vendors`.`name` as `name`')
        ->leftJoin('comissions','request_order_items.seller_id','=','comissions.vendor_id')
        ->leftJoin('vendors','request_order_items.seller_id','=','vendors.id')
        ->where('request_order_items.order_id',$order_id)
        ->where('request_order_items.seller_id',$seller_id)
         ->get();
        if (!empty($data)) {
          $data = $data->toArray();
        }
        return $data;

  }

  public function list_all_order_vendor($order_id,$seller_id)
  {
      $data = self::selectRaw('`request_order_items`.`id` as `id`,`request_order_items`.`order_id` as `order_id`,`request_order_items`.`pro_id` as `pro_id`,`request_order_items`.`request_product_name` as `request_product_name`,`request_order_items`.`request_product_price` as `request_product_price`,`request_order_items`.`request_product_qty` as `request_product_qty`,`request_order_items`.`seller_id` as `seller_id`')
        ->selectRaw('`comissions`.`id` as `com_id`,`comissions`.`vendor_id` as `com_vendor_id`,`comissions`.`comission` as `com_percnt`')
        ->selectRaw('`products`.`featured_images` as `featured_images`')
        ->leftJoin('comissions','request_order_items.seller_id','=','comissions.vendor_id')
        ->leftJoin('products','request_order_items.pro_id','=','products.id')
        ->where('request_order_items.order_id',$order_id)
        ->where('request_order_items.seller_id',$seller_id)
         ->get();
        // if (!empty($data)) {
        //   $data = $data->toArray();
        // }
        return $data;

  }
}
