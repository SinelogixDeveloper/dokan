@include('layouts.header')
<section class="section-2" style="padding-top: 40px; padding-bottom:80px; ">
   <div class="cus_container">
      <div class="row">
         <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product</li>
               </ol>
            </nav>
         </div>
      </div>
      <div class="row s-b" style="margin-top: 10px;">
         <div class="col-md-2">
            <input type="checkbox" id="check" />
            <label for="check" class="checkBtn">
               <div class="filter">
                  <span style="font-size: 25px;
                     margin-right: 15px;" onclick="openFilter()">Filter
                     <i class="fa fa-bars" style=""></i>
                  </span>
               </div>
            </label>
            <div class="product-sidebar" id="psb">
               <!--  <input type="checkbox" id="close" />
                  <label for="close" class="closeBtn">
                  <i class="fa fa-times" aria-hidden="true"></i>
                  </label> -->
               <a href="javascript:void(0)" class="closebtn" onclick="closeFilter()"><i class="fa fa-times" aria-hidden="true" style="    position: absolute;
                  z-index: 1;
                  right: 13px;
                  top: 12px;
                  color: #fff;"></i></a>
               <ul>
                  <li style="background-color: #8D1B3D; color: #fff; font-size: 15px; padding: 10px 20px;">Filter</li>
                  <li>
                     <h6>CATEGORY</h6>
                  </li>
                  <li>Suits (600)</li>
                  <li>Shirts (457)</li>
                  <li>Trousers</li>
                  <li></li>
               </ul>
               <ul>
                  <li>
                     <h6>PRICE</h6>
                  </li>
                  <li>
                     <div class="slidecontainer" id="style-4">
                        <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
                     </div>
                  </li>
                  <li><span>$123</span><span style="float: right;">$500</span></li>
               </ul>
               <ul class="colors">
                  <li>
                     <h6>COLOR</h6>
                  </li>
                  <li><a href="#"><span class="black"></span></a><span>Black</span></li>
                  <li><a href="#"><span class="orange"></span></a><span>Orange</span></li>
                  <li><a href="#"><span class="green"></span></a><span>Green</span></li>
                  <li><a href="#"><span class="blue"></span></a><span>Blue</span></li>
               </ul>
               <ul class="type">
                  <li>
                     <h6>TYPE</h6>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Orange</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Orange</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Orange</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Orange</label>
                     </div>
                  </li>
               </ul>
               <ul class="size">
                  <li>
                     <h6>SIZE</h6>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">XL</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">XL</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">XL</label>
                     </div>
                  </li>
                  <li>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">XL</label>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="col-md-10 product-wrap">
            <div class="container pdt_slider">
               <div class="row">
                  <div class="col-md-12">
                     <div class="owl-carousel banner">
                        <div> <img src="{{'/assets/homecss/images/pro-banner.png'}}"></div>
                        <div> <img src="{{'/assets/homecss/images/pro-banner.png'}}"></div>
                        <div> <img src="{{'/assets/homecss/images/pro-banner.png'}}"></div>
                     </div>
                  </div>
               </div>
               <div class="row" style="margin-top: 40px;">
                  <div class="col-md-12">
                     <div class="h_ctitle">
                        <h4>{{$cate_name}}</h4>
                     </div>
                  </div>
               </div>

               <div class="row">
                  @foreach($product as $row)

                  <div class="col">
                     <div class="hpSlider_item">
                        <a href="#" class="fas fa-heart fav_btn"></a>
                        <div class="hpsl_thum">
                           <a class="hpimgLink" href="{{ url('product/view/'.$row->id) }}">
                              <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $row->featured_images }}">
                           </a>
                        </div>
                        <div class="hpdt_dtls hvr-sweep-to-top">
                           <div class="hp_name">
                              <p>Nike</p>
                              <a href="{{ url('product/view/'.$row->id) }}">{{$row->product_name}}</a>
                           </div>
                           <div class="hslpricebx">
                              @if($row->product_old_price !='')
                              <span class="old-price"> QAR {{ $row->product_old_price }} </span>
                              @endif
                              <span class="price"> QAR {{ $row->product_price }} </span>
                           </div>
                           <a class="add_crt_btn" href="{{ url('/addToCart/'.$row->id) }}"></a>
                           <div class="dis_price">50% Off</div>
                        </div>
                     </div>
                  </div>

                  @endforeach
               </div>



               <div class="row" style="margin-top: 40px;">
                  <div class="col-md-12">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                           <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1">Previous</a>
                           </li>
                           <li class="page-item"><a class="page-link active" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('layouts.footer')