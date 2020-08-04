<footer>
  <div class="cus_container footer-top">
    <div class="row">
      <div class="col ftr_logo">
        <a class="logo" href="index.html"><img src="{{'/assets/homecss/images/logo_ftr.png'}}" class="img-fluid" alt=""/></a>
      </div>
      <div class="col-lg-6 col-md-7 ml-md-auto ftr_links">
        <ul>
          <li><a href="#">Abouts Us</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact </a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 social">
        <ul>
          <li><a target="_blank" href="#"><img src="{{'/assets/homecss/images/twitter.svg'}}" alt=""> </a></li>
          <li><a target="_blank" href="#"><img src="{{'/assets/homecss/images/fb.svg'}}" alt=""> </a></li>
          <li><a target="_blank" href="#"><img src="{{'/assets/homecss/images/insta.svg'}}" alt=""> </a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="cus_container footer-mid">
    <div class="row">
      <div class="col-md-2">
        <h4>Address</h4>
         <p>SQRT Street, ABC City <br>
          Qatar - 41565</p>
      </div>
      <div class="col-md-2">
        <h4>MY Account</h4>
        <ul>
          <li><a href="#">My Orders</a></li>
          <li><a href="#">Wishlist</a></li>
          <li><a href="#">Coupons</a></li>
        </ul>
      </div>
      <div class="col-md-3"> 
        <h4>Orders & Returns</h4>
        <ul>
          <li><a href="#">Order Status</a></li>
          <li><a href="#">Shipping, Delivery &Store Pickup</a></li>
          <li><a href="#">Return & Exchange Promise</a></li>
        </ul>
      </div>
      <div class="col-md-2 cont_ftr">
        <h4>24/7 Help Center</h4>
         <a href="tel:(+974) 000 0000">(+974) 000 0000</a>
         <a href="mailto:Info@example.com">info@example.com</a>
      </div>
      <div class="col-md-3">
        <div class="paymnt_method"> <img src="{{'/assets/homecss/images/payment_method.png'}}" alt=""> </div>
        <div class="pwd">Powered by: <a href="https://auraqatar.com/" target="_blank"><img src="{{'/assets/homecss/images/aura_logo.png'}}" alt="aura"></a></div>
      </div>
    </div>
  </div>
  <div class="cus_container socket">
    <div class="row">
        <div class="col-md-3 cpyrt">© <Strong>Dokan - </Strong> All Rights Reserved.</div>
        <div class="col-md-5 ml-md-auto skt_links"> <a href="#">Privacy Policy - </a> <a href="#"> Site Map - </a> <a href="#"> Terms of Use</a> </div>
    </div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{'/assets/homecss/js/wow.min.js'}}"></script>
 <script>
  new WOW().init();
</script>
<script src="{{'/assets/homecss/js/custom.js'}}"></script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="{{'/assets/homecss/js/wow.min.js'}}"></script>
 <script>
  new WOW().init();
</script>
<script src="{{'/assets/homecss/js/custom.js'}}"></script>
</body>
</html>
<script type="text/javascript">
    $('body').on('click', '#submitForm', function(){
        var registerForm = $("#Register");
        var formData = registerForm.serialize();
        $( '#name-error' ).html( "" );
        $( '#email-error' ).html( "" );
        $( '#mobile-error' ).html( "" );
        $( '#password-error' ).html( "" );

        $.ajax({
            url:'/register',
            type:'POST',
            data:formData,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.name){
                        $( '#name-error' ).html( data.errors.name[0] );
                    }
                    if(data.errors.email){
                        $( '#email-error' ).html( data.errors.email[0] );
                    }
                    if(data.errors.mobile){
                        $( '#mobile-error' ).html( data.errors.mobile[0] );
                    }
                    if(data.errors.password){
                        $( '#password-error' ).html( data.errors.password[0] );
                    } 
                }
                if(data.success) {
                    $('#modalSignup').css('display','none');
                  $('#modalSignup').removeClass('show');
                  $('#modalver').addClass('show');
                  $('#modalver').css('display','block');
                  $('#veri_name').val(data.name);
                  $('#veri_email').val(data.email);
                  $('#veri_mobile').val(data.mobile);
                  $('#signup_otp').html(data.mobile);
                  $('#veri_password').val(data.password);
                }
            },
        });
    });
</script>