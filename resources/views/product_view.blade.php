@include('layouts.header')

<section class="section-2" style="padding-top: 40px; padding-bottom:80px; ">  

<div class="cus_container">
<div class="row">
<div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Product</a></li>
    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
  </ol>
</nav>
</div>
</div>



<div class="row" style="margin-top: 10px;">

       <div class="col-md-5">

     <div class="container">
    <div class="row align-items-center">
        <div class="" id="slider">
            <div id="myCarousel" class="carousel slide pointer-event">
                <!-- main slider carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item" data-slide-number="0">
                      <a class="magnifier-thumb-wrapper">
                        <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid img" id="magnifier-item-0">
                      <div id="magnifier-item-0-lens" class="magnifier-lens hidden" style="width: 272px; height: 254px; background: url({{ url('dokan/public/product_images/'.$product['featured_images']) }}) -271px -253px no-repeat scroll; left: 270px; top: 252px;"></div></a>
                    </div>
                    <div class="carousel-item" data-slide-number="1">
                        <a class="magnifier-thumb-wrapper">
                        <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid img" id="magnifier-item-1">
                      <div id="magnifier-item-1-lens" class="magnifier-lens hidden" style="width: 0px; height: 0px; background: url(&quot;{{ url('dokan/public/product_images/'.$product['featured_images']) }}&quot;) 0px 0px no-repeat scroll;"></div></a>
                    </div>
                    <div class="carousel-item" data-slide-number="2">
                       <a class="magnifier-thumb-wrapper">
                        <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid img" id="magnifier-item-2">
                      <div id="magnifier-item-2-lens" class="magnifier-lens hidden" style="width: 0px; height: 0px; background: url(&quot;{{ url('dokan/public/product_images/'.$product['featured_images']) }}&quot;) 0px 0px no-repeat scroll;"></div></a>
                    </div>
                    <div class="carousel-item active" data-slide-number="3">
                        <a class="magnifier-thumb-wrapper">
                        <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid img opaque" id="magnifier-item-3">
                      <div id="magnifier-item-3-lens" class="magnifier-lens" style="width: 0px; height: 0px; background: url(&quot;{{ url('dokan/public/product_images/'.$product['featured_images']) }}&quot;) -159px -1px no-repeat scroll; left: 158px; top: 0px;"></div></a>
                    </div>
                    <div class="carousel-item" data-slide-number="4">
                       <a class="magnifier-thumb-wrapper">
                        <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid img" id="magnifier-item-4">
                      <div id="magnifier-item-4-lens" class="magnifier-lens hidden" style="width: 0px; height: 0px; background: url(&quot;{{ url('dokan/public/product_images/'.$product['featured_images']) }}&quot;) 0px 0px no-repeat scroll;"></div></a>
                    </div>


                 

                </div>
                <!-- main slider carousel nav controls -->


                <ul class="carousel-indicators list-inline mx-auto px-2">
                    <li class="list-inline-item">
                        <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                            <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                          <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                           <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item active">
                        <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                           <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid">
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                           <img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" class="img-fluid">
                        </a>
                    </li>
                </ul>

                   <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
        </div>

    </div>
    <!--/main slider carousel-->
</div>

    </div>

    
    <div class="col-md-7 view-wrap">

    <div class="product-view-wrap">
      
      <div class="container">

        <div class="row">

          <div class="col-md-12">

        {{-- <div class="magnifier-preview" id="preview" style="position: absolute; width: 100%; right: 0; height: 500px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-2-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-4-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-3-large" class="magnifier-large" style="width: 1388px; height: 1000px; left: -406px; top: -2px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-1-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-0-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px; left: -691px; top: -498px;"></div>
 --}}

        {{-- <div class="magnifier-preview" id="preview" style="position: absolute; width: 100%; right: 0; height: 500px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-2-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px; left: -691px; top: -45px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-4-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-3-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px; left: -691px; top: -498px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-1-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px; left: -640px; top: -167px;"><img src="{{ url('dokan/public/product_images/'.$product['featured_images']) }}" id="magnifier-item-0-large" class="magnifier-large hidden" style="width: 1388px; height: 1000px; left: -691px; top: -144px;"></div> --}}
        </div>
        </div>
        <div class="row">
          
          <div class="col-md-12">
            
              <p>{{ $product->product_name }}</p>
           </div>

           <div class="col-md-12">
             <?php $seller = \App\Vendor::where('id', $product->created_by)->first(); ?>
             
            @if($seller)
             <p style="font-size: 15px;
    color: #a9a6a6;">Seller<span style="color: #680b12;
    font-size: 15px;
    padding: 0 15px;">{{ $seller->name }}</span></p>
            @endif

           </div>

           <div class="col-md-12">

            <h5>
               <span class="rate">3.8</span><span>1342 Ratings</span> <span>SKU: {{ $product->product_sku }}</span> <span>Add Your Review</span>
               <span class="stock">In Stock</span>
            </h5>

          </div>

          <div class="col-md-12">
            
            @if($product->product_offer_price == null)
			<h3><span>QAR {{ $product->product_price }}</span></span></h3>
            @else
            <h3><span>QAR {{ $product->product_offer_price }}</span><span class="strike"><del>QAR {{ $product->product_price }}</del></span></h3>
            @endif

          </div>

{{-- foreach ($product as $row)
{
if(!empty($row->product_size))
{
$pre_size = json_decode($row->product_size);
if(!empty($pre_size->size))
{
$product_sizes[] = $pre_size->size;
}
}
} --}}

        <form action="{{ url('/addCart') }}" method="POST">

          @csrf
          <input type="hidden" name="id" value="{{ $product->id }}">

        </div>
        @if(!empty($product->product_size))
        <div class="row">
          <?php $pre_size = json_decode($product->product_size); ?>
          @if(!empty($pre_size->size))
          <div class="col-md-4">
            
              <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">SIZE</label>
              <div class="col-sm-10">
               <?php $product_sizes = explode(',', $pre_size->size) ?>
               <select class="form-control" name="size">
                 
                 <option>Select size</option>
                 
                 @foreach($product_sizes as $size)
                 <option value="{{ $size }}">{{ $size }}</option>
                 @endforeach

               </select>

              </div>
            </div>

          </div>
          @endif
          

          @if(!empty($pre_size->color))
          <div class="col-md-4">
            
              <div class="form-group row">
              <label for="staticEmail" class="col-sm-3 col-form-label">COLOR</label>
              <div class="col-sm-9">
               <?php $product_colors = explode(',', $pre_size->color) ?>
               <select class="form-control" name="color">
                 
                 <option>Select Color</option>
                 
                 @foreach($product_colors as $color)
                 <option value="{{ $color }}">{{ $color }}</option>
                 @endforeach

               </select>

              </div>
            </div>

          </div>
          @endif

        </div>
        @endif


        <div class="row">
          
          <div class="col-md-4">
            
              <div class="form-group row">
              <label for="staticEmail" class="col-sm-2 col-form-label">QTY</label>
              <div class="col-sm-10">

                @if($product->product_qty < 10)
               
               <input type="number" name="quantity" value="1" min="1" max="{{ $product->product_qty }}">

               @else

               <input type="number" name="quantity" value="1" min="1" max="10">

               @endif
               {{-- <select class="form-control">
                 
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>

               </select> --}}

              </div>
            </div>

          </div>

                

        </div>

              <div class="row">
          
          <div class="col-md-12">
            
            <div class="button-mobile-fix">
              <div class="form-group row">
              <label for="staticEmail" class="col-sm-1 col-form-label"></label>
              <div class="col-sm-10">
               
               <button class="b-now" style="margin-left: -18px;" >BUY NOW</button>

               <button class="ad-c" >ADD TO CART</button>

              </div>
            </div>
          </div>

          </div>
        </form>
                

        </div>


        <div class="row">
          
          <div class="col-md-10 social" style="margin: 12px 0;">
            
              <div class="form-group row share">
              <label for="staticEmail" class="col-sm-1 col-form-label"></label>
              <div class="col-sm-10">
               
              <span style="font-weight: 900; padding-left: 0 !important;">SHARE</span>
              <span class="whats"><a href="#"><i class="fab fa-whatsapp"></i></a></span>
              <span class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></span>
              <span class="twit"><a href="#"><i class="fab fa-twitter"></i></a></span>
              <span class="insta"><a href="#"><i class="fab fa-instagram"></i></a></span>
              </div>
            </div>

          </div>

                

        </div>


        <div class="row view-txt">
          
          <div class="col-md-9">
            
            <p> {{ $product->product_short_description }}  </p>

          </div>

        </div>

   







      </div>

    </div>

    </div>

 

</div>



              <div class="row">
                <div class="col-md-12">
                  <nav>
                    <div class="nav nav-tabs pro-nav" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Descriptions</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Specifications</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Ratings &amp; Review</a>
                      
                    </div>
                  </nav>
                  <div class="tab-content tab-content-pro" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                      <div class="">
                        
                        <div class="row">
                        
                       <div class="col-md-12">  
                      <p>{{ $product->product_full_discription }}</p>
                      {{-- <p>Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat.</p> --}}

                      </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-2"><p>Style Code</p></div>
                      <div class="col-md-6"><p><b>NAVY BLUE</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Ocasion</p></div>
                      <div class="col-md-6"><p><b>Formal</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Vents</p></div>
                      <div class="col-md-6"><p><b>Double vent</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Design</p></div>
                      <div class="col-md-6"><p><b>2 front</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Fabriv Care</p></div>
                      <div class="col-md-6"><p><b>Dry Clean</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Pack of</p></div>
                      <div class="col-md-6"><p><b>1</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Sales Package</p></div>
                      <div class="col-md-6"><p><b>Hanger, Cover</b></p></div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-2"><p>Other Details</p></div>
                      <div class="col-md-6"><p><b>consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt</b></p></div>

                    </div>
                  </div>

                      </div>
                    
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                      
                    </div>
                    <div class="tab-pane fade review-tab" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                     <div class="col-md-7"> 
                    <p class="c-r">Customer reviews <span>1(Items)</span></p>
                    </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-7">
                        
                        <p class="p-name">Magnoom  Slim  Women Blue Jeans</p>

                        <p><b>Lorem ipsum dummy sdfarret regergerrge ferfwefr</b></p>

                        

                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-7">


                        <div class="row">
                      
                        <div class="col-md-4">
                          
                          <p>Value <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        </div>



                 
                      
                        <div class="col-md-4">
                          
                          <p>Quality <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        </div>

                        

                    

                    
                      
                        <div class="col-md-4">
                          
                          <p>Price <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                        </div>

                        
                    </div>
                    </div>
                    </div>

                    <div class="row">
                      
                      <div class="col-md-6">
                        
                        <span class="p-name">Review by jane doe / (Posted on 5/2/2020)</span>


                      </div>

                    </div>

                     <div class="row">
                      
                      <div class="col-md-6">
                        
                        <p style="margin-top: 20px;">Write your own review</p>

                        <p>You are reviewing <span class="p-name">Magnoom  Slim  Women Blue Jeans</span></p>


                      </div>

                    </div>

                    <div class="row col-mobile">
                      
                      <div class="col-md-7">

                        <div class="row">
                          <div class="col-md-12">
                          
                          <p class="rate-pro">How do you rate this product</p>

                        </div>

                        </div>
                        
                        <div class="row">
                          
                          <div class="col-md-2"></div>
                          <div class="col-md-2"><i class="fa fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          </div>
                          <div class="col-md-2"><i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          </div>
                          <div class="col-md-2"><i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="far fa-star"></i>
                          <i class="far fa-star"></i>
                          </div>
                          <div class="col-md-2"><i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="far fa-star"></i>
                          </div>
                          <div class="col-md-2"><i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          </div>

                        </div>

                        <div class="row" style="margin-top: 15px;">
                          
                          <div class="col">
                            
                            <p>Quality</p>

                          </div>

                          <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        </div>

                        <div class="row" style="margin-top: 15px;">
                          
                          <div class="col">
                            
                            <p>Price</p>

                          </div>

                          <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        </div>

                        <div class="row" style="margin-top: 15px;">
                          
                          <div class="col">
                            
                            <p>Value</p>

                          </div>

                          <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        <div class="col" align="center">
                          
                          <input type="radio">

                        </div>

                        </div>

                        <div class="row">
                          
                          <div class="col-md-12">
                            
                            <div class="form-group">
                              
                              <label>Let us know your thoughts<span>*</span></label>

                              <textarea class="form-control" rows="3" style="width: 100%;"></textarea>

                            </div>

                          </div>

                        </div>


                           <div class="row">
                          
                          <div class="col-md-12">
                            
                            <div class="form-group">
                              
                              <label>Summary of your review<span>*</span></label>

                              <input type="text" class="form-control" style="width: 100%;">

                            </div>

                          </div>

                        </div>


                          <div class="row">
                          
                          <div class="col-md-12">
                            
                            <div class="form-group">
                              
                              <label>What is your nickname<span>*</span></label>

                              <input type="text" class="form-control" style="width: 100%;">

                            </div>

                          </div>

                        </div>

                        <div class="row justify-content-end">
                          
                          <div class="col-md-3">
                            
                            <button class="s-r">Submit Review</button>

                          </div>

                        </div>



                        

                      </div>

                    </div>
                    </div>
                    </div>
                   
                  </div>
                
                </div>


 <div class="row mt-h">
      <div class="col-md-12">
        <div class="h_ctitle">
          <h4>Recommended products</h4>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-carousel pdt_slider best_off owl-loaded owl-drag">

           

           

           

           

           

           

           

           

           

      <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2984px, 0px, 0px); transition: all 0.3s ease 0s; width: 4822px;"><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_2.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_5.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_8.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_7.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_3.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_2.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_1.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Nike</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_7.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_3.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_2.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_5.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_8.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_7.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_3.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_2.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_1.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Nike</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_7.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_3.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned active" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_2.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_5.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div><div class="owl-item cloned" style="width: 199.578px; margin-right: 30px;"><div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="images/pm_8.png">                              
              </a>          
           </div>
           <div class="hpdt_dtls hvr-sweep-to-top">
            <div class="hp_name">
               <p>Brand</p>
               <a href="#">Product Name</a>
            </div>  
            <div class="hslpricebx">
              <span class="old-price"> QAR 300 </span>
              <span class="price"> QAR 250 </span>
            </div>  
             <a class="add_crt_btn" href="#"></a> 
             <div class="dis_price">50% Off</div> 
            </div>                                        
          </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><div class="nav-btn prev-slide"></div></button><button type="button" role="presentation" class="owl-next"><div class="nav-btn next-slide"></div></button></div><div class="owl-dots disabled"></div></div>
    </div>
    </div>

              </div>
        
      






  </section>

@include('layouts.footer')