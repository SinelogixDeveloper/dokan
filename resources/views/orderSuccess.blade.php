@include('layouts.header')

<section class="section-2" style="padding-top: 40px; padding-bottom:80px; ">
  
<div class="cus_container success-order">
  
  <div class="row justify-content-center">
    
    <div class="col-md-5" align="center">
      
      <img src="{{ url('dokan/public/images/success.png') }}" style="width: 170px;">

      <h2>Thank you for your order.</h2>

      <p class="success-status">Your order has been placed successfully with eCommerce.com
Order Number is: {{ $orderId }}</p>

  <small class="text-muted">
    <p style="margin-bottom: 10px;"><img src="{{ url('dokan/public/images/invo.png') }}"> Invoice has been sent to your registered email id, after order is dispatched.
</p>
  </small>

    <small class="text-muted">
    <p><img src="{{ url('dokan/public/images/em.png') }}">You will received tracking details on your registered email id, after order is dispatched.
</p>
  </small>

  <button class="edt-btn"  onclick="window.location.href='{{ url('/') }}'">CONTINUE SHOPPING</button>

    </div>

  </div>

</div>

</section>

@include('layouts.footer')