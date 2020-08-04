<?php
$path = resource_path();
//echo $path;

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">    
     <link rel="shortcut icon" href="images/favicon.png"/>
    <title>Dokan Online</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   
    <link rel="stylesheet" href="{{'/assets/new_home/scss/animate.css'}}">
    <!-- Bootstrap core CSS -->    
   <link href="{{'/assets/new_home/scss/style.css'}}" rel="stylesheet">    
   <!-- slider -->    
   <script src="{{'/assets/new_home/slider/owl.carousel.min.js'}}"></script>
	 <link rel="stylesheet" href="{{'/assets/new_home/slider/owl.carousel.min.css'}}">	 
  </head>
  <body class="home">	
    
<header>
  <div class="cus_container header-top">
    <div class="row">
      <div class="col-lg-7 col-md-5">
        <marquee width="100%" direction="left"><p>Welcome to <strong>Dokan</strong> ! Wrap new offers / gift every single day on Weekends - New Copupon code: Ramdan2020</p></marquee>
       
      </div>
      <div class="col-lg-5 col-md-7 top-elemnts">
        <a class="ph" href="mailto:email@example.com"><i class="fas fa-envelope"></i> <span>email@example.com</span></a>
        <a class="mail" href="tel:+974 44429100"><i class="fas fa-phone-alt"></i><span>(+974) 44429100</span></a>
        <div class="dropdown top-language-wrap"> 
          <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#" aria-expanded="true"> <img src="{{'/assets/new_home/images/eng.png'}}" alt="language"> English <span class="caret"></span> </a>
        <ul class="dropdown-menu" role="menu">
            <li><a role="menuitem" href="#"><img src="{{'/assets/new_home/images/eng.png'}}" alt="language"> English </a></li>
            <li><a role="menuitem" href="#"><img src="{{'/assets/new_home/images/qa.png'}}" alt="language"> Arabic </a></li>
            <li><a role="menuitem" href="#"><img src="{{'/assets/new_home/images/fre.png'}}" alt="language"> French </a></li>
        </ul>
    </div>
    </div>
    </div>
  </div>
  <div id="header">
  <div class="cus_container header-mid">
      <div class="row mid-wrap">
        <div class="col brand">
          <span class="burger" onclick="openNav()"></span>
         <a class="logo" href="index.html"><img src="{{'/assets/new_home/images/logo.png'}}" class="img-fluid" alt=""/></a>
      </div>
    <div class="col-lg-3 col-md-4">
    <form class="header-search-box" action="#" method="post">
      <div class="search-box">
          <input type="text" class="form-control" placeholder="Search">
          <span></span>
      </div>
                
  </form>
    </div>         
  

      <div class="col-md-4 secondary-menu"> 
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Deals</a></li>
              <li><a href="#">Big Discounts</a></li>
              <li><a href="#">Help & Services</a></li>
            </ul>
      </div> 
      <div class="col"> 
      <div class="dropdown hd_login">
              <?php
                        
               if(!empty($userdata))
                 {
               ?>
               <a class="btn dropdown-toggle" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
                  <i class="fas fa-user"></i>{{$userdata[0]['name']}} <span>Logout</span>
             </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                        <?php 
                        }
                        else
                        {
                        ?> 
                        <a class="btn dropdown-toggle" href="#" role="button" data-toggle="modal" data-target="#modalLogin">
                            <i class="fas fa-user"></i>My Account <span>Login</span>
                         </a>
                         <?php } ?>

<!-- Modal-Password -->

  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="left-modal-bg">
          <img src="{{'/assets/new_home/images/logo-pass.png'}}">
          </div>
          <div class="right-modal-bg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <h4>Welcome</h4>
              <div class="form-group">
                <small id="emailHelp" class="form-text text-muted">
                  <label for="exampleInputEmail1">Email</label>
                </small>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" required="" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group" style="position: relative;">
                  <small id="emailHelp" class="form-text text-muted">
                    <label for="exampleInputPassword1">Password</label>
                  </small>
                  <input type="password" name="password" required=""  class="form-control pwd" id="exampleInputPassword1" placeholder="Password">
                    <i class="fa fa-eye mreveal"></i>
                  </div>
                  <small id="emailHelp" class="form-text text-muted" align="right">
                    <label style="cursor: pointer;" for="exampleInputEmail1" data-toggle="modal" data-dismiss="modal" data-target="#modalForgot">Forgot Password?</label>
                  </small>
                  <button type="submit" class="edt-btn">Login</button>
                  <p>
                    <small id="emailHelp" class="form-text text-muted">
                      <label for="exampleInputEmail1">Not a member yet?</label>
                      <span data-toggle="modal" data-dismiss="modal" data-target="#modalSignup" style="cursor: pointer;">Sign up</span>

                    </small>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!--Modal password  end -->


<!-- modal forgot -->


     
  <div class="modal fade" id="modalForgot"  tabindex="-1" role="dialog" aria-labelledby="modalForgotLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="left-modal-bg">
          <img src="{{'/assets/new_home/images/logo-pass.png'}}">
          </div>
          <div class="right-modal-bg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             <form method="POST" id="reset">
                                       @csrf
                                       <h4>Forgot Password</h4>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Email</label>
                                          </small>
                                          <input type="email" class="form-control" required="" name="re_email" id="re_email" aria-describedby="emailHelp" placeholder="Enter email">
                                       </div>
                                       <div class="or-modal">
                                          <h6>OR</h6>
                                       </div>
                                       <div class="form-group" style="position: relative;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputPassword1">Mobile</label>
                                          </small>
                                          <input type="text" class="form-control" required="" name="re_mobile" id="re_mobile" value="+974" placeholder="Ex:+97423456789">
                                          <!-- <i class="fa fa-eye"></i> -->
                                       </div>
                                       <span id="user_not_available" style="color: red;"></span>
                                       <button id="resetForm" type="button" class="edt-btn">Send</button>
                                       <p>
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Not a member yet?</label>
                                             <span data-toggle="modal" data-dismiss="modal" data-target="#modalSignup" style="cursor: pointer;">Sign up</span>
                                          </small>
                                       </p>
                                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>

 
<!--Modal Forgot  end -->


 
<!--Modal Forgot  OTP -->

<div class="modal fade" id="modalOTP"  tabindex="-1" role="dialog" aria-labelledby="modalOTPLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="left-modal-bg">
          <img src="{{'/assets/new_home/images/logo-pass.png'}}">
          </div>
          <div class="right-modal-bg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
             <form method="POST" id="newpassword">
                                       @csrf
                                       <h4>Reset Password</h4>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">OTP</label>
                                          </small>
                                          <input type="text" class="form-control" required="" name="mobile_otp" id="mobile_otp" aria-describedby="emailHelp">
                                       </div>
                                       <div class="form-group" style="position: relative;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputPassword1">Password</label>
                                          </small>
                                          <input type="password" name="enter_new_password" required="" id="enter_new_password" class="form-control pwd" placeholder="Password">
                                          <i class="fa fa-eye mreveal"></i>
                                       </div>
                                       <div class="form-group" style="position: relative;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputPassword1">Confirm Password</label>
                                          </small>
                                          <input type="password" name="enter_confirm_password" required="" id="enter_confirm_password" class="form-control pwd" placeholder="Password">
                                          <i class="fa fa-eye mreveal"></i>
                                       </div>
                                       <input type="hidden" name="verify_mobile" id="verify_mobile" value="">
                                       <input type="hidden" name="verify_email" id="verify_email" value="">
                                       <div id="update_success" style="color: green"></div>
                                       <div id="update_success_error" style="color: red;"></div>
                                       <button id="newpasswordform" class="edt-btn" type="button">Save</button>
                                       <p>
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Back to</label>
                                             <span data-dismiss="modal" data-toggle="modal" class="login" data-target="#modalLogin" style="cursor: pointer;">Login</span>
                                          </small>
                                       </p>
                                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>

<!--Modal Forgot  OTP end -->


<!--Modal Save psssword -->

<div class="modal fade" id="modalSave"  tabindex="-1" role="dialog" aria-labelledby="modalSaveLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="left-modal-bg">
          <img src="{{'/assets/new_home/images/logo-pass.png'}}">
          </div>
          <div class="right-modal-bg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           <form align="center">
                                       <img src="{{'/assets/homecss/images/success.png'}}" width="80px">
                                       <h5>Your password has been reset successfully!</h5>
                                       <button type="submit" class="edt-btn" data-toggle="modal" data-dismiss="modal" data-target="#modalLogin">BACK TO LOGIN</button>
                                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>


<!--Modal Save psssword end -->


<!--Modal Signup -->


<div class="modal fade" id="modalSignup"  tabindex="-1" role="dialog" aria-labelledby="modalSignupLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
          <div class="right-modal-bg">
                <button type="button" class="close-sign" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            <form method="POST" id="Register">
                                       @csrf
                                       <h4 style="margin-bottom: 15px;">Create an account</h4>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Name</label>
                                          </small>
                                          <input type="text" name="name" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <span class="text-danger">
                                             <strong id="name-error"></strong>
                                          </span>
                                       </div>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Email</label>
                                          </small>
                                          <input type="email" name="email" required="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <span class="text-danger">
                                             <strong id="email-error"></strong>
                                          </span>
                                       </div>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Phone number</label>
                                          </small>
                                          <input type="text" name="mobile" required="" placeholder="Ex:+974123456789" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                          <span class="text-danger">
                                             <strong id="mobile-error"></strong>
                                          </span>
                                       </div>
                                       <div class="form-group" style="position: relative;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputPassword1">Password</label>
                                          </small>
                                          <input type="password" name="password" required="" class="form-control pwd" id="exampleInputPassword1" placeholder="Password">
                                          <i class="fa fa-eye mreveal"></i>
                                          <span class="text-danger">
                                             <strong id="password-error"></strong>
                                          </span>
                                       </div>
                                       <button type="button" id="submitForm" class="edt-btn">Register</button>
                                       <p style="margin-top: 30px;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Already have an account?</label>
                                             <span data-dismiss="modal" data-toggle="modal" data-target="#modalLogin" style="cursor: pointer;">Login</span>
                                          </small>
                                       </p>
                                    </form>
                </div>
                <div class="left-modal-bg">
              <img src="{{'/assets/new_home/images/logo-pass.png'}}">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              </div>
              </div>
            </div>
          </div>
        </div>


        <!--modal Phone verification -->

            <div class="modal fade" id="modalver"  tabindex="-1" role="dialog" aria-labelledby="modalverLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        
          <div class="right-modal-bg">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
             
             <form align="center" method="POST" id="otp_verifications">
                                       @csrf
                                       <img src="{{'/assets/homecss/images/ph-ver.png'}}">

                                       <h4>Phone Verification</h4>
                                       <div class="form-group">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1">Enter the OTP recieved on <span>
                                                   <div id="signup_otp"></div>
                                                </span></label>
                                          </small>
                                          <input type="text" class="form-control" id="otp" name="otp" aria-describedby="emailHelp">
                                       </div>
                                       <input type="hidden" id="veri_name" name="veri_name" value="">
                                       <input type="hidden" id="veri_email" name="veri_email" value="">
                                       <input type="hidden" id="veri_mobile" name="veri_mobile" value="">
                                       <input type="hidden" id="veri_password" name="veri_password" value="">
                                       <div id="verify_otp_error" style="color: red;"></div>
                                       <button type="button" id="submitotpverification" class="edt-btn">VERIFY</button>
                                       <p style="margin-top: 30px;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputEmail1" style="margin-bottom: 0 !important;">If you did not receive your OTP or your OTP has expired,<a href="#"> Resend.</a></label>
                                          </small>
                                       </p>
                                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!---modal verification ends -->


<!--Modal Signup end -->
      
        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </div>
    </div>
     <?php $total = 0 ?>

               
                        @foreach( (array) session('cart') as $id => $details)
                            <?php $total +=$details['quantity'] ?>
                        @endforeach 
    <div class="col"> 
      <div class="cart_top">
        <a href="#"> <i><img src="{{'/assets/new_home/images/cart.svg'}}"></i> 
          My Cart
          <span id="notify"> {{$total}}</span>
        </a>
      
      </div>
    </div> 
   
</div>
  </div>
  <div id="nav_main" class="main-menu">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="cus_container">
        <div class="row no-gutters">
          <div class="col-md-11 msecond">
              <ul class="main_nav">
                <li class="m_nav_link mega_menu"><a href="#">Books & Encyclopedias</a>
                
                  <div class="menu-drop">
                    <div class="cus_container">
                    <ul class="d-lg-flex">
                        <li class="col-md-2">
                            <ul> 
                                <li class="mega-header">Book</li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Crime and Detective</a></li>
                                <li><a href="#">Drama</a></li>
                                <li><a href="#">Historical Fiction</a></li>
                                <li><a href="#">Horror</a></li>
                                <li><a href="#">Humor</a></li>
                                <li class="v_all"><a href="#">Shop All</a></li>
                            </ul>
                        </li>
                        <li class="col-md-2">
                            <ul>
                                <li class="mega-header">Children’s Book</li>
                                <li><a href="#">Biography</a></li>
                                <li><a href="#">Science Fiction</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li><a href="#">Poetry</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li><a href="#">Poetry</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li class="v_all"><a href="#">Shop All</a></li>
                            </ul>
                        </li>
                        <li class="col-md-2">
                            <ul>
                                <li class="mega-header">Kid's</li>
                                <li><a href="#">Animals & Pets</a></li>
                                <li><a href="#">Art & Photography</a></li>
                                <li><a href="#">Auto & Cycles</a></li>
                                <li><a href="#">Business & Finance</a></li>
                                <li><a href="#">Children</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Education</a></li>
                                <li class="v_all"><a href="#">Shop All</a></li>
                            </ul>
                        </li>
                        <li class="col-lg-6 bst_sl">
                          <h4 class="mega-header">Best Sellers <a class="shop_al" href="#">Shop All</a></h4>
                          <ul class="mega_best_sellrs d-lg-flex">                              
                              <li class="col-md-4"> <a href="#"> <img src="{{'/assets/new_home/images/MImg_1.png'}}" alt=""> </a></li>
                              <li class="col-md-4"> <a href="#"><img src="{{'/assets/new_home/images/MImg_2.png'}}" alt=""> </a></li>
                              <li class="col-md-4"> <a href="#"><img src="{{'/assets/new_home/images/MImg_3.png'}}" alt=""> </a></li>
                          </ul>
                      </li>
                      
                    </ul>
                  </div>
                </div>
                
                </li>
                <li class="m_nav_link mega_menu"><a href="#">Movies, Music & Games</a>
                
                  <div class="menu-drop">
                    <div class="cus_container">
                    <ul class="d-lg-flex">
                       
                        <li class="col-md-2">
                            <ul>
                                <li class="mega-header">Children’s Book</li>
                                <li><a href="#">Biography</a></li>
                                <li><a href="#">Science Fiction</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li><a href="#">Poetry</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li><a href="#">Poetry</a></li>
                                <li><a href="#">Folkolre</a></li>
                                <li class="v_all"><a href="#">Shop All</a></li>
                            </ul>
                        </li>
                        <li class="col-md-2">
                          <ul> 
                              <li class="mega-header">Book</li>
                              <li><a href="#">Adventure</a></li>
                              <li><a href="#">Classic</a></li>
                              <li><a href="#">Crime and Detective</a></li>
                              <li><a href="#">Drama</a></li>
                              <li><a href="#">Historical Fiction</a></li>
                              <li><a href="#">Horror</a></li>
                              <li><a href="#">Humor</a></li>
                              <li class="v_all"><a href="#">Shop All</a></li>
                          </ul>
                      </li>
                        <li class="col-md-2">
                            <ul>
                                <li class="mega-header">Kid's</li>
                                <li><a href="#">Animals & Pets</a></li>
                                <li><a href="#">Art & Photography</a></li>
                                <li><a href="#">Auto & Cycles</a></li>
                                <li><a href="#">Business & Finance</a></li>
                                <li><a href="#">Children</a></li>
                                <li><a href="#">Education</a></li>
                                <li><a href="#">Education</a></li>
                                <li class="v_all"><a href="#">Shop All</a></li>
                            </ul>
                        </li>
                        <li class="col-lg-6 bst_sl">
                          <h4 class="mega-header">Best Sellers <a class="shop_al" href="#">Shop All</a></h4>
                          <ul class="mega_best_sellrs d-lg-flex">  
                             <li class="col-md-4"> <a href="#"><img src="{{'/assets/new_home/images/MImg_2.png'}}" alt=""> </a></li>                            
                             <li class="col-md-4"> <a href="#"> <img src="{{'/assets/new_home/images/MImg_1.png'}}" alt=""> </a></li>
                             <li class="col-md-4"> <a href="#"><img src="{{'/assets/new_home/images/MImg_3.png'}}" alt=""> </a></li>
                          </ul>
                      </li>
                      
                    </ul>
                  </div>
                </div>

                </li>
                <li class="m_nav_link"><a href="#">Electronics</a></li>
                <li class="m_nav_link"><a href="#">Home & Garden Tools</a></li>
                <li class="m_nav_link"><a href="#">Health & Beauty</a></li>
                <li class="m_nav_link"><a href="#">Kids</a></li>
                <li class="m_nav_link"><a href="#">Fashion & Clothing</a></li>
                <li class="m_nav_link"><a href="#">Sports & Outdoors</a></li>
             </ul>
          </div>
          <div class="col ml-md-auto view_al">
            <a href="#">View All</a>           
        </div>
        </div>
        </div>
   </div>
</div> 
</div>
</header>


<section id="main_banner" class="banner-sec">
    <div class="owl-carousel banner">
       
        <div>

          <div class="container">

          <div class="textoverlay">


            <h6>The</h6>

            <h1>Denim</h1>

            <h3>UPTO 50% OFF <span>Fest</span></h3>

            <button>SHOP NOW</button>


          </div>
        </div>


         <img src="{{'/assets/new_home/images/banner1.jpg'}}" >

       </div>
               <div>

          <div class="container">

          <div class="textoverlay">


            <h6>The</h6>

            <h1>Denim</h1>

            <h3>UPTO 50% OFF <span>Fest</span></h3>

            <button>SHOP NOW</button>


          </div>
        </div>


         <img src="{{'/assets/new_home/images/banner1.jpg'}}" >

       </div>
              <div>

          <div class="container">

          <div class="textoverlay">


            <h6>The</h6>

            <h1>Denim</h1>

            <h3>UPTO 50% OFF <span>Fest</span></h3>

            <button>SHOP NOW</button>


          </div>
        </div>


         <img src="{{'/assets/new_home/images/banner1.jpg'}}" >

       </div>
              <div>

          <div class="container">

          <div class="textoverlay">


            <h6>The</h6>

            <h1>Denim</h1>

            <h3>UPTO 50% OFF <span>Fest</span></h3>

            <button>SHOP NOW</button>


          </div>
        </div>


         <img src="{{'/assets/new_home/images/banner1.jpg'}}" >

       </div>
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
          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p1.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #dbdbdb;" class="cat_name" href="#">Movies & Music</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p2.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #e7e7e7;" class="cat_name" href="#">Health & Beauty</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p3.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #cdcac5;" class="cat_name" href="#">Kitchen & Dinig</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p4.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #cbcacf;" class="cat_name" href="#">Kids</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p6.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #d6e7f6;" class="cat_name" href="#">Home Decor</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p5.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #dedede;" class="cat_name" href="#">Footwear</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p2.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #e7e7e7;" class="cat_name" href="#">Health & Beauty</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img  hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p3.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #cdcac5;" class="cat_name" href="#">Kitchen & Dinig</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p4.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #cbcacf;" class="cat_name" href="#">Kids</a>        
          </div>

          <div class="m_cat_item">
            <div class="cat_img hvr-shutter-out-vertical">
              <a href="#">
                  <img src="{{'/assets/new_home/images/p6.jpg'}}" alt="">
              </a>
            </div>  
            <a style="background: #d6e7f6;" class="cat_name" href="#">Home Decor</a>        
          </div>

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
        <div class="owl-carousel pdt_slider best_off">

          <div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_1.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_5.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_8.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
          </div> 

          <div class="hpSlider_item">
            <a href="#" class="wish_active fas fa-heart fav_btn"></a>
            <div class="hpsl_thum">
              <a class="hpimgLink" href="#">
                <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
          </div> 

      </div>
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
      
            <div class="owl-carousel pdt_slider best_sellers">
    
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_1.png'}}">                              
                  </a>          
               </div>
               <div class="hpdt_dtls hvr-sweep-to-top">
                <div class="hp_name">
                   <p>Adidas</p>
                   <a href="#">Product Name</a>
                </div>  
                <div class="hslpricebx">
                  <span class="old-price"> QAR 300 </span>
                  <span class="price"> QAR 250 </span>
                </div>  
                 <a class="add_crt_btn" href="#"></a> 
                 <div class="dis_price">50% Off</div> 
                </div>                                        
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="wish_active fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_2.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_3.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="wish_active fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_4.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_5.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/bst_sel_6.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="wish_active fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
              </div> 
    
              <div class="hpSlider_item">
                <a href="#" class="wish_active fas fa-heart fav_btn"></a>
                <div class="hpsl_thum">
                  <a class="hpimgLink" href="#">
                    <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
           
    
          </div>
            </div>

        </div>
        <div class="tab-pane fade" id="new-arrivals" role="tabpanel" aria-labelledby="new-arrivals-tab">
          
          <div class="owl-carousel pdt_slider new_arrivals">
    
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_1.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_5.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_8.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
         
  
        </div>
          </div>

        </div>
        <div class="tab-pane fade" id="most-rating" role="tabpanel" aria-labelledby="most-rating-tab">
          
          <div class="owl-carousel pdt_slider mosting_rating">
    
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_1.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_3.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_1.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_5.png'}}">                              
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
            </div> 
  
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_8.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_5.png'}}">                              
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
            </div> 
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_7.png'}}">                              
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
            </div> 
  
           
  
            <div class="hpSlider_item">
              <a href="#" class="wish_active fas fa-heart fav_btn"></a>
              <div class="hpsl_thum">
                <a class="hpimgLink" href="#">
                  <img src="{{'/assets/new_home/images/pm_2.png'}}">                              
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
         
  
        </div>
          </div>

        </div>
      </div>
    </div>
    </div>
    
    <div class="row promo-ad-full">
      <div class="col-md-12 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/new_home/images/ad_banner.jpg'}}" alt="">
        </a>
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
          <img src="{{'/assets/new_home/images/ad4.jpg'}}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/new_home/images/ad5.jpg'}}" alt="">
        </a>
      </div>
      <div class="col-md-4 hovershine column_shine">
        <a href="#">
          <img src="{{'/assets/new_home/images/ad6.jpg'}}" alt="">
        </a>
      </div>
    </div>

    <div class="row no-gutters feature_strip">   
      <div class="f_outer">
      <div class="col-md-3">
         <div class="f_wraper">
             <div class="f_icon"> <img src="{{'/assets/new_home/images/delivery.png'}}" alt=""></div>      
         <div class="f_box_content">
            <p>Free delivery</p>
            <span>From QAR 50</span>
         </div>           
         </div>           
      </div>
      <div class="col-md-3">
        <div class="f_wraper">
          <div class="f_icon"><img src="{{'/assets/new_home/images/suport.png'}}" alt=""></div>
          <div class="f_box_content">
          <p>Support 24/7</p>
          <span>Online 24 Hours</span>
         </div>
        </div>
    </div>
    <div class="col-md-3">
      <div class="f_wraper">
        <div class="f_icon"> <img src="{{'/assets/new_home/images/free_return.png'}}" alt="" style="max-height: 40px;"></div>
        <div class="f_box_content">
         <p>Free Return</p>
         <span>365 A Day</span>
      </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="f_wraper">
        <div class="f_icon"><img src="{{'/assets/new_home/images/payment.png'}}" alt=""></div>
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
<footer>
  <div class="cus_container footer-top">
    <div class="row">
      <div class="col ftr_logo">
        <a class="logo" href="index.html"><img src="{{'/assets/new_home/images/logo_ftr.png'}}" class="img-fluid" alt=""/></a>
      </div>
      <div class="col-lg-6 col-md-7 ml-md-auto ftr_links">
        <ul>
          <li><a href="#">Abouts Us</a></li>
          <li><a href="#" style="font-size: 14px !important;">FAQs</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Contact </a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-3 social">
        <ul>
          <li><a target="_blank" href="#"><img src="{{'/assets/new_home/images/twitter.svg'}}" alt=""> </a></li>
          <li><a target="_blank" href="#"><img src="{{'/assets/new_home/images/fb.svg'}}" alt=""> </a></li>
          <li><a target="_blank" href="#"><img src="{{'/assets/new_home/images/insta.svg'}}" alt=""> </a></li>
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
        <div class="paymnt_method"> <img src="{{'/assets/new_home/images/payment_method.png'}}" alt=""> </div>
        <div class="pwd">Powered by: <a href="https://auraqatar.com/" target="_blank"><img src="{{'/assets/new_home/images/aura_logo.png'}}" alt="aura"></a></div>
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
<script src="js/wow.min.js"></script>
 <script>
  new WOW().init();
</script>
<script src="js/custom.js"></script>
</body>
</html>
 <script type="text/javascript">
      $('body').on('click', '#resetForm', function() {
         //mobile_code=$('#dropdownTcode').text();
         mobile = $('#re_mobile').val();
         email = $('#re_email').val();
         $.ajax({
            url: '/send_otp',
            type: "POST",
            data: {
               "_token": "{{ csrf_token() }}",
               email: email,
               mobile: mobile,
               //mobile_code:mobile_code,
            },
            success: function(data) {
               if (data.success == 1) {
                  $('#modalForgot').css('display', 'none');
                  $('#modalForgot').removeClass('show');
                  $('#modalOTP').addClass('show');
                  $('#modalOTP').css('display', 'block');
                  $('#veri_mobile').html(data.verify_number);
                  $('#verify_mobile').val(data.mobile);
                  $('#verify_email').val(data.email);
               }
               if (data.error == 0) {
                  $('#user_not_available').text('User is not available... !!');
                  return false;
               }
               $('#user_not_available').text('Somthing wrong to sending mobile number , retray again !!');
            },
         });
      });
   </script>
   <script type="text/javascript">
      $('body').on('click', '#newpasswordform', function() {
         otp = $('#mobile_otp').val();
         password = $('#enter_new_password').val();
         new_password = $('#enter_confirm_password').val();
         mobile = $('#verify_mobile').val();
         email = $('#verify_email').val();
         if (mobile != '') {
            $.ajax({
               url: '/reset_password',
               type: "POST",
               data: {
                  "_token": "{{ csrf_token() }}",
                  otp: otp,
                  password: password,
                  new_password: new_password,
                  mobile: mobile,
               },
               success: function(data) {
                  if (data.success == 1) {
                     $('#modalOTP').removeClass('show');
                     $('#modalOTP').css('display', 'none');
                     $('#modalSave').css('display', 'block');
                     $('#modalSave').addClass('show');
                  }
                  if (data.error == 0) {
                     $('#update_success_error').text('password not match with confirm password !!');
                     return false;
                  }
                  if (data.otperror == 0) {
                     $('#update_success_error').text('OTP not matched !!');
                     return false;
                  }
               },
            });
         } else {
            $.ajax({
               url: '/reset_password',
               type: "POST",
               data: {
                  "_token": "{{ csrf_token() }}",
                  otp: otp,
                  password: password,
                  new_password: new_password,
                  mobile: mobile,
                  email: email,
               },
               success: function(data) {
                  if (data.success == 1) {
                     $('#modalOTP').removeClass('show');
                     $('#modalOTP').css('display', 'none');
                     $('#modalSave').css('display', 'block');
                     $('#modalSave').addClass('show');
                  }
                  if (data.error == 0) {
                     $('#update_success_error').text('password not match with confirm password !!');
                     return false;
                  }
                  if (data.otperror == 0) {
                     $('#update_success_error').text('OTP not matched !!');
                     return false;
                  }
               },
            });
         }
      });
   </script>
   <script type="text/javascript">
      $('body').on('click', '#submitotpverification', function() {
         otp = $('#otp').val();
         name = $('#veri_name').val();
         email = $('#veri_email').val();
         mobile = $('#veri_mobile').val();
         password = $('#veri_password').val();
         $.ajax({
            url: '/otp_verify',
            type: 'POST',
            data: {
               "_token": "{{ csrf_token() }}",
               otp: otp,
               name: name,
               email: email,
               mobile: mobile,
               password: password,
            },
            success: function(data) {
               console.log(data.name);
               if (data.otperror) {
                  $('#verify_otp_error').text('OTP Not matched !!');
                  return false;
               }
               if (data.success) {

                  window.location = "/myaccount/";
               }
            },
         });
      });
      
      $(".close").click(function(){
        $(".modal").css("display","none").attr("aria-hidden","true"); 
        location.reload();
    });
    $(".login").click(function(){
        $("#modalOTP").css("display","none").attr("aria-hidden","true");
        $("#modalLogin").css("display","block").attr("aria-hidden","true");
        $("#modalForgot").css("display","");
        //$('#modalForgot').addClass('show');
        
        
    });
    $(".modelforget").click(function(){

         $('#modalForgot').addClass('show');
       
    });
      
   </script>
  <script type="text/javascript">
       $(".mreveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
   </script>
