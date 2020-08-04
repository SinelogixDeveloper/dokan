@include('layouts.header')
<section id="main_banner" class="banner-sec">
  <div class="owl-carousel banner">
    @foreach($banner as $row)
    <div>

          <div class="container">

          <div class="textoverlay">


            <!--<h6>The</h6>-->

            <h1>{{ $row->bannertitle }}</h1>

            <h3>{{ $row->bannerdiscription }} </h3>

            <button  onclick="location.href='{{ $row->bannerurl }}';">SHOP NOW</button>


          </div>
        </div>


         <img src="{{ URL::to('/dokan/public/') }}/banner_images/{{ $row->bannerimages }}" alt="">

       </div>
    <!--<div> </div>-->
    @endforeach
  </div>
</section>
<section class="section-2">
  <div class="cus_container">
    <div class="row">
      <div class="col-md-12">
        <div class="h_ctitle">
          <h4>Shop By Category</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-carousel pdt_slider cat_slider">
          <?php
          $d = array();
          $name_array = [];
          $temp_cat = [];

          if (isset($catid_name) && !empty($catid_name))
            $temp_cat = array_column($catid_name, 'category_name', 'id');
          foreach ($temp_cat as $key => $value) {
            $temp_cat[$key] = $value['en'];
          }
          ?>
          @foreach($data as $key => $row)
          <?php
          if (!empty($row->parent_category)) {
            $cat_id = 0;
            if (in_array($row->category_name, $temp_cat)) {
              $cat_id = array_flip($temp_cat);
            }
            $d[] = array(
              'parent_menu' => array('cat_id' => $cat_id[$row->parent_category], 'name' => $row->parent_category, 'child_menu' => array('child_name' => $row->category_name, 'child_id' => $row->id), 'image' => $row->category_images)
            );
            $name_array[$key][$row->parent_category] = $row->parent_category;
            $name_array[$key]['id'] = $key;
          } else {
            $d[] = array(
              'parent_menu' => array('cat_id' => $row->id, 'name' => $row->category_name, 'child_menu' => array('child_name' => '', 'child_id' => $row->id), 'image' => $row->category_images)
            );
            $name_array[$key][$row->category_name] = $row->category_name;
            $name_array[$key]['id'] = $key;
          }
          ?>
          @endforeach
          <?php
          $set_menu_arr = [];
          $get_columns = [];
          $get_columns_clone = [];
          for ($i = 0; $i < count($d); $i++) {
            $get_columns = array_column($name_array, $d[$i]['parent_menu']['name'], 'id');
            $get_columns_clone[] = array_column($name_array, $d[$i]['parent_menu']['name'], 'id');
            if(isset($get_columns) && count($get_columns) > 1){                      
                      foreach ($get_columns as $get_key => $get_value) {
                        $set_menu_arr[$i]['parent_menu']['cat_id'] = $d[$i]['parent_menu']['cat_id'];
                             $set_menu_arr[$i]['parent_menu']['name'] = $d[$i]['parent_menu']['name'];
                        $set_menu_arr[$i]['parent_menu']['child_menu'][$get_key] = ['child_name'=>$d[$get_key]['parent_menu']['child_menu']['child_name'],'child_id'=>$d[$get_key]['parent_menu']['child_menu']['child_id']];
                         $set_menu_arr[$i]['parent_menu']['image'] = $d[$get_key]['parent_menu']['image'];
                      }                  
                  }else{
                    $set_menu_arr[$i]['parent_menu']['cat_id'] = $d[$i]['parent_menu']['cat_id'];
                     $set_menu_arr[$i]['parent_menu']['name'] = $d[$i]['parent_menu']['name'];
                        // $set_menu_arr[$i]['parent_menu']['child_menu'][$i] = ['child_name'=>$d[$get_key]['parent_menu']['child_menu']['child_name'],'child_id'=>$d[$get_key]['parent_menu']['child_menu']['child_id']];
                        $set_menu_arr[$i]['parent_menu']['child_menu'][$i] = ['child_name'=>$d[$i]['parent_menu']['child_menu']['child_name'],'child_id'=>$d[$i]['parent_menu']['child_menu']['child_id']];
                        $set_menu_arr[$i]['parent_menu']['image'] = $d[$i]['parent_menu']['image'];
                  }
          }
          ?>
          <?php
          foreach ($get_columns_clone as $get_key => $get_value) {
            if (sizeof($get_value) > 1) {
              foreach ($get_value as $subkey => $subvalue) {
                $first_value = key($get_value);
                if (key($get_value) != $subkey && (isset($set_menu_arr[$subkey]))) {
                  unset($set_menu_arr[$subkey]);
                }
              }
            }
          }
          ?>
          @foreach($set_menu_arr as $cust_row)
          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="{{ url('/product_listing',$cust_row['parent_menu']['cat_id'])}}">
                <img src="{{ url('dokan/public/category_images/'.$cust_row['parent_menu']['image']) }}" alt="">
              </a>
            </div>
            <a style="background: #dbdbdb;" class="cat_name" href="{{ url('/product_listing',$cust_row['parent_menu']['cat_id'])}}"><?php echo $cust_row['parent_menu']['name']; ?></a>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="row mt-h">
      <div class="col-md-12">
        <div class="h_ctitle">
          <h4>Best Offers</h4>
        </div>
      </div>
      <div class="col-md-12">
         @if(isset($best_offer) && !empty($best_offer))
            <div class="owl-carousel pdt_slider new_arrivals">
              @foreach ($best_offer as $best_offer_key => $best_offer_val)
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="{{ url('product/view/'.$best_offer_val->prod_id) }}">
                    <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $best_offer_val->featured_images }}">
                  </a>
                </div>
                <div class="hpdt_dtls hvr-sweep-to-top">
                  <div class="hp_name">
                    <?php
                    $decode_brand = json_decode($best_offer_val->brand_name);
                    $brand_name = "Brand";
                    if (isset($decode_brand) && !empty($decode_brand)) {
                      $brand_name = $decode_brand->en;
                    }
                    ?>
                    <p>{{ $best_offer_val->brand_name }}</p>
                    <a href="#">{{$best_offer_val->product_name}}</a>
                  </div>
                  <div class="hslpricebx">
                       <?php
                      $dis = 0;
                      $actual_price = 0;
                      $offer_price = 0;
                      $real_price = 0;
                      $cuur_date = date('Y-m-d'); 
                      $to_date   = $best_offer_val->to_date;
                      ?>
                    <?php
                    if($to_date > $cuur_date)
                    {
                      $actual_price = $best_offer_val->product_price;
                      $offer_price =  $best_offer_val->product_offer_price;
                      if($actual_price > $offer_price )
                      {
                      $real_price  =  $actual_price - $offer_price ;
                      
                      $dis = ($real_price*100)/$actual_price; 
                      }
                    
                     ?>
                    <span class="old-price"> QAR {{$best_offer_val->product_price}} </span>
                    <span class="price"> QAR {{$best_offer_val->product_offer_price}} </span>
                    <?php
                    }
                    else
                    {
                    ?>
                  <span class="price main_price_text" style="text-aliign:center;margin-left:80px !important;"> QAR {{$best_offer_val->pro_price}} </span>  
                  <?php
                    }
                    ?>
                    
                  </div>
                  <a class="add_crt_btn" href="{{ url('/addToCart/'.$best_offer_val->prod_id) }}"></a>
                  @if(isset($best_offer_val->product_offer_price) && !empty($best_offer_val->product_offer_price))
                  
                  <?php
                 
                  if($dis > 0)
                  {
                        
                  ?> 
                  <div class="dis_price" style="height:40px;"><?php echo round($dis).'%'.'  OFF'; ?></div>
                  <?php
                 
                  }
                  else{
                       
                  ?>
                   <div class="dis_price" style="height:40px;"></div>
                   <?php
                   
                  }
                  ?>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            @else
            <h3>No Products are available..!</h3>
            @endif
      </div>
    </div>

    <div class="row off-strip">
      <div class="col-md-12">
        <div class="spl_gift_wraper">
          <div class="spl_head">
            <span>Gift Special </span>
          </div>
          <div class="spl_tail">
            <p>Wrap new offers / gift every single day on weekends - New Coupon Code: <span>RAMADAN 2020</span> </p>
            <a class="hvr-pop" href="#">Shop Now</a>
          </div>

        </div>
      </div>
    </div>
    <div class="row promo-ad">
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{ asset('assets/homecss/images/ad1.jpg') }}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/homecss/images/ad2.jpg'}}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/homecss/images/ad3.jpg'}}" alt="">
        </a>
      </div>
    </div>

    <div class="row offer_tabs_h">
      <div class="col-md-12">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="best-sellers-tab" data-toggle="tab" href="#best-sellers" role="tab" aria-controls="best-sellers" aria-selected="true">Best Sellers</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="new-arrivals-tab" data-toggle="tab" href="#new-arrivals" role="tab" aria-controls="new-arrivals" aria-selected="false">New Arrivals</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="most-rating-tab" data-toggle="tab" href="#most-rating" role="tab" aria-controls="most-rating" aria-selected="false">Most Rating</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="best-sellers" role="tabpanel" aria-labelledby="best-sellers-tab">

             @if(isset($best_seller) && !empty($best_seller))
            <div class="owl-carousel pdt_slider new_arrivals">
                
              @foreach ($best_seller as $best_key => $best_val)
              
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="{{ url('product/view/'.$best_val->prod_id) }}">
                    <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $best_val->featured_images }}">
                  </a>
                </div>
                <div class="hpdt_dtls hvr-sweep-to-top">
                  <div class="hp_name">
                    <?php
                    $decode_brand = json_decode($best_val->brand_name);
                    $brand_name = "Brand";
                    if (isset($decode_brand) && !empty($decode_brand)) {
                      $brand_name = $decode_brand->en;
                    }
                    ?>
                    <p>{{ $best_val->brand_name }}</p>
                    <a href="#">{{$best_val->product_name}}</a>
                  </div>
                  <div class="hslpricebx">
                      <?php
                      $best_sel = 0;
                      $seller_actual_price = 0;
                      $seller_offer_price = 0;
                      $seller_real_price = 0;
                      $cuur_best_date = date('Y-m-d'); 
                      $best_to_date   = $best_val->to_date;
                      ?>
                      <?php
                      if($best_to_date > $cuur_best_date)
                      {
                          
                        $seller_actual_price = $best_val->product_price;
                        $seller_offer_price =  $best_val->product_offer_price;
                      if($seller_actual_price > $seller_offer_price )
                      {
                      $seller_real_price  =  $seller_actual_price - $seller_offer_price ;
                      
                      $best_sel = ($seller_real_price*100)/$seller_actual_price; 
                      } 
                       ?>      
                    <span class="old-price"> QAR {{$best_val->product_price}} </span>
                    <span class="price"> QAR {{$best_val->product_offer_price}} </span>
                    <?php
                      }
                      else
                      {
                      ?>
                      <span class="price main_price_text" style="text-aliign:center;margin-left:80px !important;"> QAR {{$best_val->pro_price}} </span>
                      <?php
                        }
                       ?>
                  </div>
                  <a class="add_crt_btn" href="{{ url('/addToCart/'.$best_val->prod_id) }}"></a>
                  @if(isset($best_val->product_offer_price) && !empty($best_val->product_offer_price))
                 <?php
                 
                  if($best_sel > 0)
                  {
                        
                  ?> 
                  <div class="dis_price" style="height:40px;"><?php echo round($best_sel).'%'.'  OFF'; ?></div>
                  <?php
                 
                  }
                  else{
                       
                  ?>
                   <div class="dis_price" style="height:40px;"></div>
                   <?php
                   
                  }
                  ?>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            @else
            <h3>No Products are available..!</h3>
            @endif

          </div>
          <div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
            @if(isset($new_arrival) && !empty($new_arrival))
            <div class="owl-carousel pdt_slider new_arrivals">
                
              @foreach ($new_arrival as $new_key => $new_val)
              
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="{{ url('product/view/'.$new_val->prod_id) }}">
                    <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $new_val->featured_images }}">
                  </a>
                </div>
                <div class="hpdt_dtls hvr-sweep-to-top">
                  <div class="hp_name">
                    <?php
                    $decode_brand = json_decode($new_val->brand_name);
                    $brand_name = "Brand";
                    if (isset($decode_brand) && !empty($decode_brand)) {
                      $brand_name = $decode_brand->en;
                    }
                    ?>
                    <p>{{ $new_val->brand_name }}</p>
                    <a href="#">{{$new_val->product_name}}</a>
                  </div>
                  <div class="hslpricebx">
                   <?php
                      $new_sel = 0;
                      $new_actual_price = 0;
                      $new_offer_price = 0;
                      $new_real_price = 0;
                      $cuur_new_date = date('Y-m-d'); 
                      $new_to_date   = $new_val->to_date;
                      ?>
                      <?php
                      if($new_to_date > $cuur_new_date)
                      {
                        $new_actual_price = $new_val->product_price;
                        $new_offer_price =  $new_val->product_offer_price;
                      if($new_actual_price > $new_offer_price )
                      {
                      $new_real_price  =  $new_actual_price - $new_offer_price ;
                      
                      $new_sel = ($new_real_price*100)/$new_actual_price; 
                      } 
                       ?>      
                    <span class="old-price"> QAR {{$new_val->product_price}} </span>
                    <span class="price"> QAR {{$new_val->product_offer_price}} </span>
                    <?php
                      }
                      else
                      {
                      ?>
                      <span class="price main_price_text" style="text-aliign:center;margin-left:80px !important;"> QAR {{$new_val->pro_price}} </span>
                      <?php
                        }
                       ?>
                  </div>
                  <a class="add_crt_btn" href="{{ url('/addToCart/'.$new_val->prod_id) }}"></a>
                  @if(isset($new_val->product_offer_price) && !empty($new_val->product_offer_price))
                  <?php
                 
                  if($new_sel > 0)
                  {
                        
                  ?> 
                  <div class="dis_price" style="height:40px;"><?php echo round($new_sel).'%'.'  OFF'; ?></div>
                  <?php
                 
                  }
                  else{
                       
                  ?>
                   <div class="dis_price" style="height:40px;"></div>
                   <?php
                   
                  }
                  ?>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            @else
            <h3>No Products are available..!</h3>
            @endif
          </div>
          <div class="tab-pane fade" id="most-rating" role="tabpanel" aria-labelledby="most-rating-tab">

           @if(isset($most_rating) && !empty($most_rating))
            <div class="owl-carousel pdt_slider new_arrivals">
                
              @foreach ($most_rating as $most_key => $most_val)
              
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="{{ url('product/view/'.$most_val->prod_id) }}">
                    <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $most_val->featured_images }}">
                  </a>
                </div>
                <div class="hpdt_dtls hvr-sweep-to-top">
                  <div class="hp_name">
                    <?php
                    $decode_brand = json_decode($most_val->brand_name);
                    $brand_name = "Brand";
                    if (isset($decode_brand) && !empty($decode_brand)) {
                      $brand_name = $decode_brand->en;
                    }
                    ?>
                    <p>{{ $most_val->brand_name }}</p>
                    <a href="#">{{$most_val->product_name}}</a>
                  </div>
                  <div class="hslpricebx">
                    <?php
                      $most_sel = 0;
                      $most_actual_price = 0;
                      $most_offer_price = 0 ;
                      $most_real_price = 0;
                      $cuur_most_date = date('Y-m-d'); 
                      $most_to_date   = $most_val->to_date;
                      ?>
                      <?php
                      if($most_to_date > $cuur_most_date)
                      {
                          
                        $most_actual_price = $most_val->product_price;
                        $most_offer_price =  $most_val->product_offer_price;
                      if($most_actual_price > $most_offer_price )
                      {
                      $most_real_price  =  $most_actual_price - $most_offer_price ;
                      
                      $most_sel = ($most_real_price*100)/$most_actual_price; 
                      } 
                       ?>      
                    <span class="old-price"> QAR {{$most_val->product_price}} </span>
                    <span class="price"> QAR {{$most_val->product_offer_price}} </span>
                    <?php
                      }
                      else
                      {
                      ?>
                      <span class="price main_price_text" style="text-aliign:center;margin-left:80px !important;"> QAR {{$most_val->pro_price}} </span>
                      <?php
                        }
                       ?>
                  </div>
                  <a class="add_crt_btn" href="{{ url('/addToCart/'.$most_val->prod_id) }}"></a>
                  @if(isset($most_val->product_offer_price) && !empty($most_val->product_offer_price))
                    <?php
                 
                  if($most_sel > 0)
                  {
                        
                  ?> 
                  <div class="dis_price" style="height:40px;"><?php echo round($most_sel).'%'.'  OFF'; ?></div>
                  <?php
                 
                  }
                  else{
                       
                  ?>
                   <div class="dis_price" style="height:40px;"></div>
                   <?php
                   
                  }
                  ?>
                  @endif
                </div>
              </div>
              @endforeach
            </div>
            @else
            <h3>No Products are available..!</h3>
            @endif

          </div>
        </div>
      </div>
    </div>

    <div class="row promo-ad-full">
      <div class="col-md-12 hovershine column_shine">
          <?php if(isset($footer_banner) && !empty($footer_banner))
             {
            ?>
        <a href="#">
          <!--<img src="{{'/assets/homecss/images/ad_banner.jpg'}}" alt="">-->
             <img src="{{ URL::to('/dokan/public') }}/client_logo/<?php echo $footer_banner->footer_banner_images ;?>">
        </a>
        <?php
         }
        ?>
      </div>
    </div>

    <div class="row  promo-ad mt_brand">
      <div class="col-md-12">
        <div class="h_ctitle">
          <h4>Best Offers on top brands</h4>
        </div>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/homecss/images/ad4.jpg'}}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/homecss/images/ad5.jpg'}}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/homecss/images/ad6.jpg'}}" alt="">
        </a>
      </div>
    </div>

    <div class="row no-gutters feature_strip">
      <div class="f_outer">
        <div class="col-md-3">
          <div class="f_wraper">
            <div class="f_icon"> <img src="{{'/assets/homecss/images/delivery.png'}}" alt=""></div>
            <div class="f_box_content">
              <p>Free delivery</p>
              <span>From QAR 50</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="f_wraper">
            <div class="f_icon"><img src="{{'/assets/homecss/images/suport.png'}}" alt=""></div>
            <div class="f_box_content">
              <p>Support 24/7</p>
              <span>Online 24 Hours</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="f_wraper">
            <div class="f_icon"> <img src="{{'/assets/homecss/images/free_return.png'}}" alt="" style="max-height: 40px;"></div>
            <div class="f_box_content">
              <p>Free Return</p>
              <span>365 A Day</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="f_wraper">
            <div class="f_icon"><img src="{{'/assets/homecss/images/payment.png'}}" alt=""></div>
            <div class="f_box_content">
              <p>Payment Method</p>
              <span>Secure Payment</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@include('layouts.footer')