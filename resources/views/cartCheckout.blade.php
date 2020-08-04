@include('layouts.header')

@if(session('cart') == null)

		<script>window.location = "/view_cart";</script>

@endif

<section class="section-2" style="padding-top: 40px; padding-bottom:80px; ">  



<div class="cus_container">

<div class="row">

<div class="col-md-12">

<nav aria-label="breadcrumb">

  <ol class="breadcrumb">

    <li class="breadcrumb-item"><a href="#">Home</a></li>

    <li class="breadcrumb-item"><a href="#">Product</a></li>

    <li class="breadcrumb-item active" aria-current="page">Cart</li>

  </ol>

</nav>

</div>

</div>



<div class="row" style="margin-top: 10px;">



    



    

    <div class="col-md-9">



    <div class="cart-wrap acc-pannel">

      

      <div class="container">

        

      <div class="col-md-12">



      	<?php $items = 0 ?>

        <?php $total = 0 ?>

               

        @foreach( (array) session('cart') as $id => $details)

            <?php $items +=$details['quantity'] ?>

            <?php $total += $details['quantity'] * $details['price'] ?>

        @endforeach 



	<form action="{{ url('/order/place') }}" method="POST" name="myForm" onsubmit="return validateForm()" novalidate>

		@csrf

      <div id="accordion" class="crt-chk">

  <div class="panel panel-default" id="1">

      <a role="button" class="collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

    <div class="panel-heading" id="headingOne">



                 <p class="panel-title">

                   

                        <i class="more-less fa fa-plus"></i>

                        <span>1</span>Shipping Address

                   

                </p>

    </div>

    </a>



    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

      <div class="card-pay">

         <div class="row">

        

        <div class="col-md-6">

          <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Ship to this address</label></small>

          

        </div>





        <div class="col-md-6" align="right">

          

           <div class="alter payment-block">  

               <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>

               <i class="fa fa-trash"><span>Remove</span></i>



             </div>



        </div>



      </div>



      <div class="row">

        

        <div class="col-md-12">

          

          <input class="form-check-input" disabled="" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">

          <label class="form-check-label" for="inlineRadio1">12345 09986</label>



        </div>



      </div>



      <div class="row pay-addrss">

        

        <div class="col-md-4">

          

          <p>Abc Building , XYZ street, 123456

New City , Doha, Qatar

</p>



        </div>



      </div>

      </div>



      <div class="row">

        

        <div class="col-md-6">



           <div class="placeholder">

            <label for="name">First name</label>

            <span class="star">*</span>

          </div>

          

          <input class="form-control" type="text" name="first_name" required="">



        </div>



        <div class="col-md-6">

          <div class="placeholder">

            <label for="name">Last name</label>

            <span class="star">*</span>

          </div>

          

          <input class="form-control" type="text" name="last_name" required="">



        </div>



      </div>



         <div class="row">

        

        <div class="col-md-6">

          <div class="placeholder">

            <label for="name">Email Address</label>

            <span class="star">*</span>

          </div>

          

          <input class="form-control" type="text" name="email" required="">



        </div>



        <div class="col-md-6">

          <div class="placeholder">

            <label for="name">Mobile Number</label>

            <span class="star">*</span>

          </div>

          <input class="form-control" name="mobile" type="text" required="">



        </div>



      </div>



      <div class="row">

        

        <div class="col-md-6">



          <div class="row">

            

            <div class="col-md-6">

                <div class="placeholder">

            <label for="name">Zone</label>

            <span class="star">*</span>

          </div>

                <input class="form-control" type="text" name="zone" required="">

              </div>



               <div class="col-md-6">

                <div class="placeholder">

            <label for="name">Street No.</label>

            <span class="star">*</span>

          </div>

                <input class="form-control" type="text" name="street" required="">

              </div>



          </div>





              <div class="row">

            

            <div class="col-md-6">

                <div class="placeholder">

            <label for="name">Building No</label>

            <span class="star">*</span>

          </div>

                <input class="form-control" type="text" name="building" required="">

              </div>



               <div class="col-md-6">

                <div class="placeholder">

            <label for="name">Flat No</label>

            <span class="star"></span>

          </div>

                <input class="form-control" type="text" name="house" >

              </div>



          </div>



          <!-- <div class="placeholder">

            <label for="name">Address</label>

            <span class="star">*</span>

          </div>

          

         <textarea rows="2" class="form-control" required></textarea>-->



        </div> 





        <div class="col-md-6">

          

        

            

            <div class="row">

              

             {{--  <div class="col-md-6">

                <div class="placeholder">

            <label for="name">City</label>

            <span class="star">*</span>

          </div>

                <input class="form-control" type="text" name="city" required="">

              </div> --}}



               {{-- <div class="col-md-6">

                <div class="placeholder">

            <label for="name">State</label>

            <span class="star">*</span>

          </div>

                <input class="form-control" type="text" name="state" required="">

              </div> --}}



            </div>



             <div class="row">

              

              <div class="col-md-12">

                <!-- <div class="placeholder">

            <label for="name">Country</label>

            <span class="star">*</span>

          </div> -->

                <select class="form-control" type="text" name="Country" required="">

                  

                  <option value="Qatar">Qatar</option>



                </select>

              </div>

              <div class="col-md-12">
                
                <select class="form-control" type="text" id="shipping_method" name="shipping_method" required="">

                  

                    <option value="">Please Select Shipping Method</option>

                    <option value="one_day_delivery">Withing 24 hours deliver</option>

                    <?php if($total > 400){ ?>

                    <option value="free_delivery">Free Delivery</option>

                    <?php } ?>

                   <?php if($total< 400){ ?>

                    <option value="three_day_delivery">After 1 Day Delivery</option>

                      <?php 

                       

                      }

                      ?>



                  </select>

              </div>



            <!--    <div class="col-md-6">

                <input class="form-control" placeholder="Zip code" type="text">

              </div>

 -->

            </div>



         



        </div>



      </div>

      <div class="row">

          <div class="col-md-6">

              <!--<div class="col-md-6">-->

              <!--    <label>Shipping Method</label>-->

              <!--</div>-->

              

                

          </div>

      </div>



      <div class="row">

        

        <div class="col-md-12">

        <div class="address-or">  

          <h6>OR</h6>

        </div>

        </div>



      </div>



      <div class="row">

        

        <div class="col-md-12">

          

          <div class="map-wrap">

            

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1846240.2134591206!2d50.09643122217961!3d25.339864219854928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c534ffdce87f%3A0x1cfa88cf812b4032!2sQatar!5e0!3m2!1sen!2sin!4v1592283368680!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>



          </div>



        </div>



      </div>



      <div class="row">

        

        

        <div class="col-md-12">

          

          <button type="button" class="edt-btn" data-toggle="collapse" data-target="#collapseTwo" style="margin-bottom: 40px;">SAVE THIS ADDRESS &amp; CONTINUE</button>



        </div>



      </div>

    </div>

  </div>

  <div class="panel panel-default" id="2">

     <a role="button" class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

    <div class="panel-heading" id="headingTwo">

         <p class="panel-title">

                   

                        <i class="more-less fa fa-plus"></i>

                       <span>2</span>Payment Methods

                   

                </p>

    </div>

  </a>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">

      <div class="card-body" style="border-bottom: 1px solid #dbdbdb;">

       

       <div class="row">

         

         <div class="col-md-12">

           

            <input checked="" class="form-check-input" type="radio" name="payment" id="payment1" value="online">

          <small class="text-muted"><label class="" for="inlineRadio1">Credit Card Direct Post (Authorised.net)</label></small>



         </div>



         <div class="col-md-12">

           

           <ul class="card-img-pay">

             

             <li><img src="{{ url('dokan/public/images/pay.jpg') }}"></li>

             <li><img src="{{ url('dokan/public/images/discover.jpg') }}"></li>

             <li><img src="{{ url('dokan/public/images/ae.jpg') }}"></li>

             <li><img src="{{ url('dokan/public/images/visa.jpg') }}"></li>

             <li><img src="{{ url('dokan/public/images/master.jpg') }}"></li>





           </ul>



         </div>



       </div>



       <div class="row">

         

         <div class="col-md-6">

           

           <div class="form-group">

             <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Credit Card Number</label></small>

            <input type="email" class="form-control" id="exampleInputEmail1" name="cardnumber" aria-describedby="emailHelp">

           

          </div>



         </div>



       </div>





       <div class="row">

         

         <div class="col-md-6">

           

           <div class="row">

             

             <div class="col-md-5">

               

              <div class="form-group">

     <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Expiry Date</label></small>

    

     <select class="form-control">

       

       <option>Month</option>

      



     </select>

   

  </div>



             </div>



             <div class="col-md-5">



              <div class="form-group">

     <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">&nbsp;</label></small>

               

      <select class="form-control">

       

       <option>Year</option>

       



     </select>



   </div>

             </div>



             <div class="col-md-2">





                <div class="form-group">

     <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">CVV</label></small>

               

       <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

   



   </div>



             </div>



           </div>



         </div>



       </div>

       



      </div>

     <div class="card-body" style="border-bottom: 1px solid #dbdbdb;">

     <div class="row">



      <div class="col-md-12">

       

       <input class="form-check-input" type="radio" name="payment" id="payment2" value="cash on delivery">

          <small class="text-muted"><label class="" for="inlineRadio1">Cash on delivery</label></small>





        </div>

        <div class="col-md-12">

       

       <input  class="form-check-input" type="radio" name="payment" id="payment3" value="card on delivery">

          <small class="text-muted"><label class="" for="inlineRadio1">Card on delivery</label></small>





        </div>



     </div>



     </div>



     <div class="card-body">

       

       <div class="row justify-content-end">

         

         <button type="button" class="edt-btn" data-toggle="collapse" data-target="#collapseThree">CONTINUE</button>



       </div>



     </div>



    </div>

  </div>

  <div class="panel panel-default" id="3">

    <a role="button" class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

    <div class="panel-heading" id="headingThree">

 



                 <p class="panel-title">

                        <i class="more-less fa fa-plus"></i>

                        <span>3</span>Order review

                  

                </p>

    </div>

    </a>

    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">

      <div class="card-body">



      	@foreach( (array) session('cart') as $id => $details)

        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">

          

          <div class="col-md-2">

            

          <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $details['photo'] }}">



          </div>



          <div class="col-md-10">

            

            <p>{{ $details['name'] }}</p>

             {{-- <small class="form-text text-muted">Size: 40, Color: Black</small> --}}



             <div class="row cart-inp">

             <div class="col-md-3"> 

             <h4>QAR {{ $details['price'] }}<span></span></h4>

             </div>



             <div class="col-md-9" style="margin-top: 10px;">

               

               <label>Quantity</label>

               <input type="text" value="{{ $details['quantity'] }}" readonly="true">



             </div>

             </div>



             <div class="row cart-btm">

              <div class="col-md-10">

             {{-- <small class="form-text text-muted" style="color: #529E34 !important;">Size: 40, Color: Black</small> --}}

             </div>

             <div class="col-md-2" align="right">

               

              {{-- <a href="#" style="color: red;"><!-- <img src="images/remove.png"> --><i class="fa fa-trash" style="position: static !important;"></i> <span>Remove</span></a> --}}



             </div>

             </div>

          </div>



        </div>

        @endforeach



        <div class="row justify-content-end" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">



          <div class="col-md-4">

          

          <ul class="review-account">

            

         <li><span>Amount Payable</span> <span style="float: right; font-weight: 800;">QAR {{ $total }}</span></li>

        <li><span>Shipping Flat Rate</span> <span style="float: right; font-weight: 800;"><span class="one_day_charge"><?php if($total > 500){ ?>Free<?php } ?></span> </span></span></li>

        <li style="padding: 20px;"><span><b>Order Total</b></span><span style="float: right; font-weight: 800;">QAR <span class="total_amount_cal">{{ $total }}</span></span></span></li>

        <div class="clear-fix"></div>



          </ul>



        </div>



        </div>





       

       <div class="row justify-content-end" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">

         

         <button type="submit" class="edt-btn" style="margin-top: 0;" value="CONTINUE">CONTINUE</button>



     

     </div>

      </div>

    </div>

  </div>

</div>



      </form>  

          

      </div>



        



      </div>



    </div>



    </div>



    <div class="col-md-3">



     <div class="cart-sidebar">



     <ul class="">

       

       <li style="background-color: #680b12; color: #fff; font-size: 14px;">Price Details</li>



       <li><span>Price({{ $items }} items)</span> <span style="float: right; font-weight: 800;">QAR {{ $total }}</span></li>

        <li><span>Delivery Charge</span> <span style="float: right; font-weight: 800;"><span class="one_day_charge"><?php if($total > 500){ ?>Free<?php } ?></span> </span></li> 

        <li><span><b>Amount Payable</b></span><span style="float: right; font-weight: 800;">QAR <span class="total_amount_cal">{{ $total }}</span></span></li>

        <div class="clear-fix"></div>

     </ul>



     </div>



    </div>



</div>

</div>



</section>





<script type="text/javascript">

  function validateForm() {

  var x1 = document.forms["myForm"]["first_name"].value;

  var x2 = document.forms["myForm"]["last_name"].value;

  var x3 = document.forms["myForm"]["email"].value;

  var x4 = document.forms["myForm"]["mobile"].value;

  var x5 = document.forms["myForm"]["zone"].value;

  var x6 = document.forms["myForm"]["street"].value;

  // var x7 = document.forms["myForm"]["house"].value;

  var x8 = document.forms["myForm"]["building"].value;

  // var x9 = document.forms["myForm"]["city"].value;

  // var x10 = document.forms["myForm"]["state"].value;

  if (x1== "" || x2== "" || x3== "" || x4== "" || x5 == "" || x6 == "" || x7 == "" || x8 == "") {

    alert("All Data must be filled out");

    return false;

  }

}

</script>

<script type="text/javascript">

    $("#shipping_method").change(function() {

         var sel_meth =  $('#shipping_method').val();

          var total = '<?php echo $total ?>';

          var total_amount = 0;

        

        if (sel_meth === 'one_day_delivery') 

        {

            total_amount = parseInt(total) + parseInt(10) ;

              $(".one_day_charge").html('QAR 10');

              $(".total_amount_cal").html(total_amount);

        }

        else if(total > 500)

        {

           $(".one_day_charge").html('Free'); 

           $(".total_amount_cal").html(total);

        }

        else

        {

           total_amount = parseInt(total) + parseInt(10) ;

           $(".one_day_charge").html('Free'); 

           $(".total_amount_cal").html(total);

        }

         

         //alert(sel_meth);

});

</script>



  @include('layouts.footer')