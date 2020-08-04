@include('layouts.header')

<section class="shop section-2" style="background: #fff !important;">
  
  <div class="cus_container">

    <div class="row">
      
      <div class="col-md-12">
        
        <h4>Shop By Category</h4>

      </div>

    </div>
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
    
    <div class="row">

    @foreach($data as $cat)
      
      <div class="col-md-2">
        
        <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="{{ url('/product_listing',$cat->id) }}" >
                  <img src="{{ url('dokan/public/category_images/'.$cat->category_images) }}" alt="">
              </a>
            </div>  
            <a style="background: #dbdbdb;" class="cat_name" href="{{ url('/product_listing',$cat->id) }}">{{ $cat->category_name }}</a>        
          </div>

      </div>
	@endforeach


    </div>

    <div class="row">
      
      <div class="col-md-12" style="padding: 40px 15px 25px;">
        
        <hr>

      </div>

    </div>

  {{--  <div class="dokan-fashion section-2" style="background: #fff !important; padding-top:0 !important;">

     <div class="row">
         <div class="col-md-6">
        
        <h3>Dokan Fashion</h3>

      </div>

      <div class="col-md-6">
            <ul class="nav small justify-content-end df" role="tablist">
                <li class="nav-item"><a class="active" data-toggle="tab" href="#tab1" role="tab" aria-selected="true">Women</a></li>
                <li class="nav-item"><a class="" data-toggle="tab" href="#tab2" role="tab" aria-selected="false">Men</a></li>
                <li class="nav-item"><a class="" data-toggle="tab" href="#tab3" role="tab" aria-selected="false">Girls</a></li>
                <li class="nav-item"><a class="" data-toggle="tab" href="#tab4" role="tab" aria-selected="false">Boys</a></li>
                <li class="nav-item"><a class="" data-toggle="tab" href="#tab5" role="tab" aria-selected="false">Baby</a></li>
            </ul>

      </div>
      
      </div>

      <div class="row">

      <div class="col-md-12">      
            <div class="tab-content">
                <div class="tab-pane active" id="tab1" role="tabpanel">
                   
    <div class="row promo-ad">
      
      <div class="col-md-6 hovershine column_shine">
       <a href="#"> 
        <img src="images/s1.png" style="width: 100%;">
        </a>
       <div class="img-content">
          
            <p>Dokan Fashion</p>

            <h4>20% Off on Women Jewels</h4>

          

            <button class="edt-btn" href="#">Shop Now <span style="margin-left: 10px;">&gt;</span></button>

        </div> 
      

      </div>

       <div class="col-md-6 hovershine column_shine">
         <a href="#"> 
        <img src="images/s2.png" style="width: 100%;">
        </a>

             <div class="img-content">
          
            <p>DOKAN FASHION</p>

            <h4>Pro Hijab Goes Global</h4>
          

            <button class="edt-btn" href="#">Shop Now <span style="margin-left: 10px;">&gt;</span></button>

        </div> 
      </div>

      </div>

      <div class="row promo-ad">
        
        <div class="col-md-6 hovershine column_shine">
           <a href="#"> 
          <img src="images/s3.png" style="width: 100%;">
          </a>

                      <div class="img-content">
          
            <p>Dokan Fashion</p>

            <h4>50% OFF on Mens Footwear</h4>

          

            <button class="edt-btn" href="#">Shop Now <span style="margin-left: 10px;">&gt;</span></button>

        </div> 
        </div>

        <div class="col-md-3 hovershine column_shine">
              <a href="#"> 
            <img src="images/s4.png" style="width: 100%;">
            </a>
                        <div class="img-content">
          
            <p>DOKAN FASHION</p>

            <h4>Best Overall Travel Backpacks</h4>

          

            <button class="edt-btn" href="#">Shop Now <span style="margin-left: 10px;">&gt;</span></button>

        </div> 
        </div> 

         <div class="col-md-3 hovershine column_shine">
             <a href="#"> 
            <img src="images/s5.png" style="width: 100%;">
            </a>
                        <div class="img-content">
          
            <p>Dokan Kids</p>

            <h4>Kids Clothing 50% OFF</h4>

          

            <button class="edt-btn" href="#">Shop Now <span style="margin-left: 10px;">&gt;</span></button>

        </div> 
        </div> 

      </div>

                </div>
                <div class="tab-pane" id="tab2" role="tabpanel">
                    
                </div>

                  <div class="tab-pane" id="tab3" role="tabpanel">
                    
                </div>

                  <div class="tab-pane" id="tab4" role="tabpanel">
                    
                </div>
                  <div class="tab-pane" id="tab5" role="tabpanel">
                    
                </div>
            </div>
        </div>
      </div>
        
    
<!--     <div class="row">
      
      <div class="col-md-6">
        
        <h3>Dokan Fashion</h3>

      </div>

      <div class="col-md-6">
        
        <ul class="df">
          
          <li><a href="#">Women</a></li>
          <li><a href="#">Men</a></li>
          <li><a href="#">Girls</a></li>
          <li><a href="#">Boys</a></li>
          <li><a href="#">Baby</a></li>


        </ul>

      </div>

    </div>

    <div class="row">
      
      <div class="col-md-6">
       <a href="#"> 
        <img src="images/s1.png" style="width: 100%;">
      </a>

      </div>

       <div class="col-md-6">
         <a href="#"> 
        <img src="images/s2.png" style="width: 100%;">
        </a>
      </div>

      </div>

      <div class="row">
        
        <div class="col-md-6">
           <a href="#"> 
          <img src="images/s3.png" style="width: 100%;">
          </a>
        </div>

        <div class="col-md-3">
              <a href="#"> 
            <img src="images/s4.png" style="width: 100%;">
            </a>
        </div> 

         <div class="col-md-3">
             <a href="#"> 
            <img src="images/s5.png" style="width: 100%;">
            </a>
        </div> 

      </div> -->

   
   </div>
      <div class="row">
      
      <div class="col-md-12" style="padding: 40px 15px 25px;">
        
        <hr>

      </div>

    </div> --}}
    
    <div class="row">
      
      <div class="col-md-10">
        
        <h3>Most Loved Brands</h3>

      </div>
      <div class="col-md-2">
        
        <p class="m-l-f-p"><a href="#">View all brands</a></p>

      </div>
    </div>

   <div class="m-l-f">
 <div class="row">
      @foreach($brands as $brand)
      <div class="col">
        <a href="#">
        <img src="{{ url('/dokan/public/brand_images/'.$brand->image) }}">
        </a>

      </div>
      @endforeach

         {{-- <div class="col">
         <a href="#">
        <img src="images/b2.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b3.png">
         </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b1.png">
         </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b2.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b3.png">
         </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b1.png">
        </a>

      </div>

    </div>
     <div class="row">
      
      <div class="col">
         <a href="#">
        <img src="images/b4.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b5.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b6.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b4.png">
         </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b5.png">
         </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b7.png">
        </a>

      </div>

         <div class="col">
         <a href="#">
        <img src="images/b4.png">
         </a>

      </div> --}}

    </div>
  </div>
  </div>

</section>

@include('layouts.footer')