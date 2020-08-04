@extends('vendor.layouts.master')

@section('content')

@include('vendor.include.top')

<style>

   .error{ color:red; } 

   .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {

    width: 100% !important;

}

/*   .bootstrap-select > select {*/

/*    position: initial !important;*/

/*    bottom: 65px;*/

/*    left: 100% !important;*/

/*    width: 100% !important;*/

/*    height: 100% !important;*/

/*    opacity: 1 !important;*/

/*     border: 1px solid !important; */

/*}*/



.bootstrap-select.btn-group .dropdown-menu.inner {

  padding: 8px !important;

  margin: 4px !important;

  }



ul.dropdown-menu.inner {

    display: block !important;

}



  .dropdown-menu.open.show {

    /* max-height: 1042px; */

    /* overflow: hidden; */

    /* min-height: 0px; */

    position: inherit !important;

    transform: translate3d(0px, 48px, 0px);

    top: -49px !important;

    left: 0px;

    will-change: transform;

}

  </style>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>

    $('select').selectpicker();

  </script>

<body>

   <div class="main-content" id="panel">

      <!-- Topnav -->

      <!-- Header -->

      <!-- Header -->

      @include('vendor.include.sidebar')

      <!-- Page content -->

      <div class="container-fluid mt--6">

         <div class="row">

            <div class="col-xl-12">

               <div class="card dasbdr_wrapper">

                  <form id="addcat" action="{{ url('/vendor/product/update',$product->id)}}" method="post" enctype="multipart/form-data">

                     {{ csrf_field() }}

                     {{ method_field('PATCH') }}

                  <div class="cph">

                     <div class="row section-header justify-content-between">

                        <div class="cus_title col-md-4">

                           <font style="vertical-align: inherit;">Update Product</font>

                        </div>

                        <div class="options float-right">

                           <button type="submit" name="save" value="save" class="btn btn-warning">

                           <i class="fa fa-check"></i>

                           <span><font style="vertical-align: inherit;">Save</font></span>

                           </button>

                        </div>

                     </div>

                     </form>

                     <input type="hidden" name="product_old_price" value="{{ $product->product_price }}">

                     <div class="cus_dashboard">

                        <div class="row mt-2">

                           <div class="col-xl-12">

                              <div class="card shadow-sm mb-4">

                                 <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">

                                    <div class="col-lg-12 nav-aside">

                                       <ul class="nav nav-tabs nav-tabs-line">

                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Product info</font></span></a></li>

                                          

                                       </ul>

                                    </div>

                                    <div class="col-lg-12 nav-content">

                                       <div class="tab-content">

                                          <div class="tab-pane fade active show" role="tabpanel" id="tab-1">

                                             <table class="add_new_tbl">

                                                <tbody>

                                                    

                                                    <!--<tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">SELECT CATEGORY</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select class="selectpicker" name="product_categories[]" multiple data-live-search="true">

                                                        //      <?php



                                                        //   $weekendArr = explode(",",$product->product_categories);



                                                        //   ?>

                                                          @foreach($data as $category)

                                                            <option value="{{ $category->id }}"<?php echo (isset($weekendArr) && in_array($category->id, $weekendArr) ) ? 'selected="selected"' : "" ?>><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>

                                                            </option>

                                                            @endforeach

                                                        </select>

                                                      </td>

                                                   </tr>-->

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Select Category</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="product_categories" name="product_categories" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">

                                                          <option  value="">Select Category</option>

                                                             @foreach($data as $category)

                                                            <option value="{{ $category->id }}" {{ $product->product_categories == $category->id ? 'selected' : '' }}><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>

                                                            </option>

                                                            @endforeach

                                                         </select>

                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>

                                                      </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">ADD RELATIVE / SIMILAR PRODUCT</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select class="selectpicker" name="similar_product[]" multiple data-live-search="true">

                                                             <?php



                                                          $similar = explode(",",$product->similar_product);



                                                           ?>

                                                          @foreach($similar_product as $pro)

                                                            <option value="{{ $pro->id }}"<?php echo (isset($similar) && in_array($pro->id, $similar) ) ? 'selected="selected"' : "" ?>><font style="vertical-align: inherit;">{{ $pro->product_name }}</font></font>

                                                            </option>

                                                            @endforeach

                                                        </select>

                                                      </td>

                                                   </tr>

                                                    

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Name(En)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_name_en" type="text" value="{{ $product->product_name }}">                                

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Name(Ar)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_name_ar" type="text" value="{{ $product->getTranslation('product_name', 'ar') }}">                                

                                                      </td>

                                                   </tr>

                                                   

                                                    <tr class="brek"> </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Short Discription(En)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <textarea class="text-box single-line" name="product_short_dis_en" type="text" value="">{{ $product->getTranslation('product_short_description', 'en') }}  </textarea>                               

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Short Discription(Ar)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <textarea class="text-box single-line" name="product_short_dis_ar" type="text" value=""> {{ $product->getTranslation('product_short_description', 'ar') }} </textarea>                               

                                                      </td>

                                                   </tr>

                                                   <tr class="brek"> </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Full Discription(En)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <textarea class="text-box single-line" name="product_full_dis_en" type="text" value="">{{ $product->getTranslation('product_full_discription', 'en') }} </textarea>                                

                                                      </td>

                                                   </tr>



                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Full Discription(Ar)</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <textarea class="text-box single-line" name="product_full_dis_ar" type="text" value="">{{ $product->getTranslation('product_full_discription', 'ar') }} </textarea>                                

                                                      </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">SKU</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Seo-compliant URL alias for search filters (optional)."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_sku" type="text" value="{{ $product->product_sku }}">                                

                                                      </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">Product Background Color</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Select color picker."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <div>

                                                            <input class="jscolor" name="background_color"

                                                                    value="{{ $product->background_color }}">

                                                            <label for="body">Select Product Background color</label>

                                                        </div>                                

                                                      </td>

                                                   </tr>

                                                   

                                                   <!-- <tr class="brek"></tr> -->

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">PRODUCT PRICE</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_price" type="text" value="{{ $product->product_price }}">                   

                                                      </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">Offer Price</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_offer_price" type="text" value="{{ $product->product_offer_price }}">                   

                                                      </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">Offer Date</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="">

                                                        <p>From: <input type="text" value="{{ $product->from_date }}" name="from_date" id="fromDate"> TO <input type="text" value="{{ $product->to_date }}" name="to_date" id="toDate"></p>

                   

                                                      </td>

                                                   </tr>

                                                   

                                                     <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Add Attribute</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <!-- Modal -->

                                                          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                                                              <div class="modal-dialog">

                                                                  <div class="modal-content">

                                                                      <div class="modal-header" style="display: block !important;">

                                                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                                                                           <h4 class="modal-title" id="myModalLabel">Add Your Required Attribute</h4>



                                                                      </div>

                                                                      <div class="modal-body">

                                                                        <?php

                                                                        if(!empty($attr))

                                                                        {

                                                                        ?> 

                                                                        @foreach($attr as $att)

                                                                          <div class="form-group" style="margin-bottom: -0.5em !important;">

                                                                            <label for="recipient-name" class="col-form-label">{{ $att->att_name }}:</label>

                                                                            <input type="hidden" name="att_name[]" value="{{ $att->att_name }}">

                                                                            <input class="text-box single-line" name="product_attribute[]" type="text" value="">

                                                                          </div>

                                                                           @endforeach



                                                                          <?php } ?>

                                                                      </div>

                                                                      <div class="modal-footer">

                                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                                                      </div>

                                                                  </div>

                                                              </div>

                                                          </div>

                                                          <a id="myBtn" style="color: #fff !important;border-color: #fb6340;background-color: #fb6340;}" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add Attribute</a>

                                                        </td>

                                                   </tr>

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">PRODUCT QUANTITY</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <input class="text-box single-line" name="product_qty" type="text" value="{{ $product->product_qty }}">                   

                                                      </td>

                                                   </tr>

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="BadgeStyle"><font style="vertical-align: inherit;">SELECT CATEGORY</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="product_categories" name="product_categories" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">-->

                                                   <!--         @foreach($data as $category)-->

                                                   <!--         <option value="{{ $category->id }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>-->

                                                   <!--         </option>-->

                                                   <!--         @endforeach-->

                                                   <!--      </select>-->

                                                   <!--      <i class="fas fa-caret-down sel_dwn-add_new"></i>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="PictureId"><font style="vertical-align: inherit;">Product Featured Images

                                                            </font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.

                                                               "><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <div class="fileupload-container">

                                                            <div class="fileupload-thumb-stage">

                                                               <div class="fileupload-thumb">

                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="" name="featured_images" type="hidden" value="">

                                                               </div>

                                                            </div>

                                                            <div class="fileupload-controls">

                                                               <div class="fileupload">

                                                                  <div class="fileupload-buttons">

                                                                     <img id="image_preview_container" src="{{ URL::to('/auraqatar/public') }}/product_images/{{ $product->featured_images }}"

                                                                    alt="preview image" style="max-height: 150px;">

                                                                     <span class="btn btn-secondary fileinput-button">

                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>

                                                                     <input type="file" name="featured_images" id="featured_images">

                                                                     </span>                                              

                                                                  </div>

                                                               </div>

                                                            </div>

                                                         </div>

                                                      </td>

                                                   </tr>

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label ><font style="vertical-align: inherit;">PRODUCT IMAGES</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         

                                                         <form method="post" action="{{url('vendor/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">

                                                            {{ csrf_field() }}

                                                         </form>

                                                         

                                                   </td>

                                                   </tr>

                                                   {{-- <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Product Status</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="product_status">

                                                            <option  value=""></option>

                                                            <option value="1" {{ $product->product_status == 1 ? 'selected' : '' }}><font style="vertical-align: inherit;">Active</font>

                                                            </option>

                                                            <option value="0" {{ $product->product_status == 0 ? 'selected' : '' }}><font style="vertical-align: inherit;">Inactive</font>

                                                            </option>

                                                         </select>

                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>

                                                      </td>

                                                   </tr> --}}

                                                   

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Approve Status</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                        <?php 

                                                        if($product->approve_status =='0')

                                                        {

                                                          $approve='Disapprove';

                                                        }

                                                        else

                                                        {

                                                          $approve='Approve';

                                                        }



                                                        ?>

                                                        <input class="text-box single-line" disabled="disabled" name="" type="text" value="{{ $approve }}">

                                                       

                                                      </td>

                                                   </tr>



                                                   <?php



                                                   if(!empty($product->reason_for_disapprove))

                                                   {



                                                    ?>

                                                    <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Reason For Disapprove</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                

                                                        <input class="text-box single-line" disabled="disabled" name="admin_comment" type="text" value="{{$product->reason_for_disapprove}}">

                                                       

                                                      </td>

                                                   </tr>

                                                    <?php

                                                    } 

                                                    ?>

                                                   

                                                   <!--<tr>-->

                                                   <!--   <td class="adminTitle">-->

                                                   <!--      <div class="ctl-label">-->

                                                   <!--         <label for="BadgeStyle"><font style="vertical-align: inherit;">SELECT CATEGORY</font>-->

                                                   <!--         </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->

                                                   <!--      </div>-->

                                                   <!--   </td>-->

                                                   <!--   <td class="adminData">-->

                                                   <!--      <select class="selectpicker" name="product_categories[]" multiple data-live-search="true">-->

                                                   <!--       @foreach($data as $category)-->

                                                   <!--         <option value="{{ $category->id }}"><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>-->

                                                   <!--         </option>-->

                                                   <!--         @endforeach-->

                                                   <!--     </select>-->

                                                   <!--   </td>-->

                                                   <!--</tr>-->

                                                   <tr>

                                                      <td class="adminTitle">

                                                         <div class="ctl-label">

                                                            <label><font style="vertical-align: inherit;">Product Brand</font>

                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the product in arabic."><i class="fa fa-question-circle"></i></a>

                                                         </div>

                                                      </td>

                                                      <td class="adminData">

                                                         <select class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="product_brand">

                                                            @foreach($brands as $brand)

                                                                <option value="{{$brand->id}}" {{($brand->name == $selected_brand->getTranslation('name', 'en')) ? "selected" : ""}}>{{$brand->name}}</option>

                                                            @endforeach

                                                         </select>

                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>

                                                      </td>

                                                   </tr>

                                                </tbody>

                                             </table>

                                          </div>

                                       </div>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               <!--</form>-->

               </div>

            </div>

         </div>

         <!-- Footer -->

         @include('vendor.include.footer')

      </div>

   </div>

   @include('vendor.include.bottom')

</body>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

<script>

        Dropzone.options.dropzone =

         {

            maxFilesize: 12,

            renameFile: function(file) {

                var dt = new Date();

                var time = dt.getTime();

               return time+file.name;

            },

            acceptedFiles: ".jpeg,.jpg,.png,.gif",

            addRemoveLinks: true,

            timeout: 50000,

            removedfile: function(file) 

            {

                var name = file.upload.filename;

                //alert(name);

                $.ajax({

                    headers: {

                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                            },

                    type: 'POST',

                    url: '{{ url("vendor/delete") }}',

                    data: {filename: name},

                    success: function (data){

                        //console.log("File has been successfully removed!!");

                    },

                    error: function(e) {

                        //console.log(e);

                    }});

                    var fileRef;

                    return (fileRef = file.previewElement) != null ? 

                    fileRef.parentNode.removeChild(file.previewElement) : void 0;

            },

       

            success: function(file, response) 

            {

                //console.log(response);

            },

            error: function(file, response)

            {

               return false;

            }

};

</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>

    $(document).ready(function () {

        

        $('#featured_images').change(function(){

          

            let reader = new FileReader();

            reader.onload = (e) => { 

              $('#image_preview_container').attr('src', e.target.result); 

            }

            reader.readAsDataURL(this.files[0]); 

 

        });



    $('#addcat').validate({ // initialize the plugin  

    rules: {

      product_name_en: {

        required: true,

      },



      product_name_ar: {

        required: true,

      },



      product_short_dis_en:

      {

        required: true,

        maxlength: 30

      },



      product_short_dis_ar:

      {

        required: true,

      },



      product_full_dis_en:

      {

        required: true,

      },



      product_full_dis_ar:

      {

        required: true,

      },



      product_sku: {

        required: true,

        maxlength: 50

      },



      product_price: {

        required: true,

      },



      product_qty: {

        required: true,

      },



      product_status: {

        required: true,

      },

      

    //   featured_images:{

    //     required:true,

    //   },



     

          

    },

    messages: {

        

      product_name_en: {

        required: "Enter Product Name in English",

        //maxlength: "Your last name maxlength should be 50 characters long."

      },

      product_name_ar: {

        required: "Enter Product Name in Arabic",

        //maxlength: "Your last name maxlength should be 50 characters long."

      },

      product_short_dis_en:

      {

        required: "Enter Product Short Discription",

        maxlength: "maxlength should be 30 characters long."

      },

      product_short_dis_ar:

      {

        required: "Enter Product Short Discription",

        //maxlength: "maxlength should be 30 characters long."

      },

      

    //   featured_images:

    //   {

    //     required: "Select Featured images",

    //     //maxlength: "maxlength should be 30 characters long."

    //   },





      product_full_dis_en:

      {

        required: "Enter Product Full Discription",

        //maxlength: "maxlength should be 30 characters long."

      },



      product_full_dis_ar:

      {

        required: "Enter Product Full Discription",

        //maxlength: "maxlength should be 30 characters long."

      },



      product_sku: {

        required: "Enter Product Sku",

        //maxlength: "Your last name maxlength should be 50 characters long."

      },

      product_price: {

        required: "Enter Product Price",

      },

      product_qty: {

        required: "Enter Product Qty",

      },

      product_categories: {

        required: "select Product Category",

      },     

      product_status: {

        required: "Select Product Status",

      }, 

    },

    });

    });

  </script>

  <script>

$(document).ready(function(){

  $('.show').on("keyup", function() {

    //alert();

    //var value = $('input[autocomplete]').val();

    var value = $('.valid').val();

    //alert(value);

    $(".inner li").filter(function() {

      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

    });

    if(value=='')

    {

      $('.form-control').removeClass('valid');

    }

  });

  $("#myBtn").click(function(){

         $('#myModal').modal('show');

    });

});

</script>

<script type="text/javascript">

$(document).ready(function() {

    $( function() {

  var from = $( "#fromDate" )

      .datepicker({

        dateFormat: "yy-mm-dd",

        changeMonth: true

      })

      .on( "change", function() {

        to.datepicker( "option", "minDate", getDate( this ) );

      }),

    to = $( "#toDate" ).datepicker({

      dateFormat: "yy-mm-dd",

      changeMonth: true

    })

    .on( "change", function() {

      from.datepicker( "option", "maxDate", getDate( this ) );

    });



  function getDate( element ) {

    var date;

    var dateFormat = "yy-mm-dd";

    try {

      date = $.datepicker.parseDate( dateFormat, element.value );

    } catch( error ) {

      date = null;

    }



    return date;

  }

});

}); 

</script>