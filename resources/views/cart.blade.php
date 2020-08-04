@include('layouts.header')
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

    <div class="cart-wrap">
      
      <div class="container">
        <?php $items = 0 ?>
        <?php $total = 0 ?>
               
        @foreach( (array) session('cart') as $id => $details)
            <?php $items +=$details['quantity'] ?>
            <?php $total += $details['quantity'] * $details['price'] ?>
        @endforeach 

        @if(session('cart') != null)

        @foreach( (array) session('cart') as $id => $details)
        
          <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
          
          <div class="col-md-2">
            
          <img src="{{ URL::to('/dokan/public') }}/product_images/{{ $details['photo'] }}">

          </div>

          
              
          <div class="col-md-10">
            <form action="{{ url('/updateCart') }}" method="POST" id="form{{ $details['id'] }}">
              @csrf
            <p>{{ $details['name'] }}</p>
             <small class="form-text text-muted"></small>

             <div class="row cart-inp">
             <div class="col-md-3"> 
             <h4>QAR {{ $details['price'] }}<span></span></h4>
             </div>

             <div class="col-md-9" style="margin-top: 10px;">
               
               <label>Quantity</label>
               <input type="number" name="quantity" value="{{ $details['quantity'] }}">
                <input type="hidden" name="id" value="{{ $details['id'] }}">
             </div>
             </div>

             <div class="row cart-btm">
              <div class="col-md-10">
             <small class="form-text text-muted" style="color: #529E34 !important;"></small>
             </div>
             <div class="col-md-2" align="right">
               <button type="submit"><i class="fa fa-cart"></i> <span>Update</span></button><br>
              <a href="{{ url('/removeCart/'.$details['id']) }}"><!-- <img src="images/remove.png"> --><i class="fa fa-trash"></i> <span>Remove</span></a>

             </div>
             </div>
             </form>
          </div>

        </div>


         @endforeach

         <div class="row cart-check">
          
          <div class="col-md-12" align="right">
           <div class="cart-check-mbl"> 
             <span>Continue Shopping</span> 
            @if(Auth::check())
             <a href="{{ url('/cart/checkout') }}"><button class="edt-btn" style="margin: 0;">Checkout</button></a>
            @else
              <button class="edt-btn" style="margin: 0;" data-toggle="modal" data-target="#modalLogin">Checkout</button>
            @endif


           </div>

          </div>

        </div>
          
        @else

        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
          
          <div class="col-md-2">
            
          &nbsp; 

          </div>
          <div class="col-md-10">
            <p>Cart is Empty</p>
             <small class="form-text text-muted"></small>

             <div class="row cart-inp">
             <div class="col-md-3"> 
             &nbsp;
             </div>

             <div class="col-md-9" style="margin-top: 10px;">
               
               &nbsp;

             </div>
             </div>

             <div class="row cart-btm">
              <div class="col-md-10">
             <small class="form-text text-muted" style="color: #529E34 !important;"></small>
             </div>
             <div class="col-md-2" align="right">
               
              <a href="#"><!-- <img src="images/remove.png"> --> <span></span></a>

             </div>
             </div>
          </div>
          </div>

        @endif

        

        

      </div>

    </div>

    </div>

    <div class="col-md-3">

     <div class="cart-sidebar">

     <ul>
       
       <li style="background-color: #680b12; color: #fff; font-size: 14px;">Price Details</li>

       <li><span>Price({{ $items }} items)</span> <span style="float: right; font-weight: 800;">QAR {{ $total }}</span></li>
        {{-- <li><span>Delivery Charge</span> <span style="float: right; font-weight: 800;">QAR 10</span></li> --}}
        <li><input type="text"><a href="#">Apply</a></li>
        <li><span>Amount Payable</span><span style="float: right; font-weight: 800;">QAR {{ $total }}</span></li>
        <div class="clear-fix"></div>
     </ul>

     </div>

    </div>

</div>
</div>

<script type="text/javascript">
 
        $(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>

  </section>
@include('layouts.footer')