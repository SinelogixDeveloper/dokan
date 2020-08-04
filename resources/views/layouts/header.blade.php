<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <link rel="shortcut icon" href="{{'/assets/homecss/images/favicon.png'}}" />
   <title>Dokan Online</title>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link rel="stylesheet" href="{{'/assets/homecss/scss/animate.css'}}">
   <!-- Bootstrap core CSS -->
   <link href="{{'/assets/homecss/scss/style.css'}}" rel="stylesheet">
   <!-- slider -->
   <script src="{{'/assets/homecss/slider/owl.carousel.min.js'}}"></script>
   <link rel="stylesheet" href="{{'/assets/homecss/slider/owl.carousel.min.css'}}">
   <style>
       .cs-cart-top #notify {
    position: absolute;
    left: 25px;
    top: -11px;
    background: #ff5662;
    color: #fff;
    width: 20px;
    height: 20px;
    text-align: center;
    border-radius: 50%;
    font-size: 12px;
    }
   </style>
</head>

<body class="home">
   <header>
      <div class="cus_container header-top">
         <div class="row">
            <div class="col-lg-7 col-md-5">
               <marquee width="100%" direction="left">
                  <p>Welcome to <strong>Dokan</strong> ! Wrap new offers / gift every single day on Weekends - New Copupon code: Ramdan2020</p>
               </marquee>
            </div>
            <div class="col-lg-5 col-md-7 top-elemnts">
               <a class="ph" href="mailto:email@example.com"><i class="fas fa-envelope"></i> <span>email@example.com</span></a>
               <a class="mail" href="tel:+974 44429100"><i class="fas fa-phone-alt"></i><span>(+974) 44429100</span></a>
               <div class="dropdown top-language-wrap">
                  <a role="button" data-toggle="dropdown" data-target="#" class="top-language dropdown-toggle" href="#" aria-expanded="true"> <img src="{{'/assets/homecss/images/eng.png'}}" alt="language"> English <span class="caret"></span> </a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a role="menuitem" href="#"><img src="{{'/assets/homecss/images/eng.png'}}" alt="language"> English </a></li>
                     <li><a role="menuitem" href="#"><img src="{{'/assets/homecss/images/qa.png'}}" alt="language"> Arabic </a></li>
                     <li><a role="menuitem" href="#"><img src="{{'/assets/homecss/images/fre.png'}}" alt="language"> French </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="header">
         <div class="cus_container header-mid">
            <div class="row mid-wrap">
               <div class="col brand">
                  <span class="burger"></span>
                  <a class="logo" href="{{ url('/') }}"><img src="{{'/assets/homecss/images/logo.png'}}" class="img-fluid" alt="" /></a>
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
             @if ($error = $errors->first('password'))
             <div class="alert alert-danger">
               {{ $error }}
             </div>
             @endif
               <div class="col">
                  <div class="dropdown hd_login">
                      <?php
                      
                      $userdata = Auth::user();
                        
                        if(!empty($userdata))
                        {
                      
                      ?>
                      <a class="btn dropdown-toggle" href="{{ url('/myaccount') }}"><i class="fas fa-user"></i>{{$userdata['name']}}</a>
                         <a class="btn dropdown-toggle" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button">
                             <span>Logout</span>
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
                                    <img src="{{'/assets/homecss/images/logo-pass.png'}}">
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
                                             <label for="email">Email</label>
                                          </small>
                                          <input type="email" class="form-control" id="email" required="" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                                       </div>
                                       <div class="form-group" style="position: relative;">
                                          <small id="emailHelp" class="form-text text-muted">
                                             <label for="exampleInputPassword1">Password</label>
                                          </small>
                                          <input type="password" class="form-control pwd" required="" id="exampleInputPassword1" name="password" placeholder="Password">
                                          <i class="fa fa-eye mreveal"></i>
                                       </div>
                                       <small id="emailHelp" class="form-text text-muted" align="right">
                                          <label style="cursor: pointer;" for="exampleInputEmail1" class="modelforget" data-toggle="modal" data-dismiss="modal" data-target="#modalForgot">Forgot Password?</label>
                                       </small>
                                       
                                        <span id="user_not_login" style="color: red;"></span>
                                        
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
                     <div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgotLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <div class="left-modal-bg">
                                    <img src="{{'/assets/homecss/images/logo-pass.png'}}">
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
                                          <input type="email" class="form-control" name="re_email" required="" id="re_email" aria-describedby="emailHelp" placeholder="Enter email">
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
                     <div class="modal fade" id="modalOTP" tabindex="-1" role="dialog" aria-labelledby="modalOTPLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <div class="left-modal-bg">
                                    <img src="{{'/assets/homecss/images/logo-pass.png'}}">
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
                     <div class="modal fade" id="modalSave" tabindex="-1" role="dialog" aria-labelledby="modalSaveLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <div class="left-modal-bg">
                                    <img src="{{'/assets/homecss/images/logo-pass.png'}}">
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
                     <div class="modal fade" id="modalSignup" tabindex="-1" role="dialog" aria-labelledby="modalSignupLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                           <div class="modal-content">
                              <div class="modal-body">
                                 <div class="right-modal-bg">
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
                                    <img src="{{'/assets/homecss/images/logo-pass.png'}}">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!--modal Phone verification -->

                     <div class="modal fade" id="modalver" tabindex="-1" role="dialog" aria-labelledby="modalverLabel" aria-hidden="true">
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
                  <div class="cart_top cs-cart-top">
                     <a href="{{ url('/view_cart') }}"> <i><img src="{{'/assets/homecss/images/cart.svg'}}"></i>
                        My Cart
                        <!--<span> {{$total}} </span> -->
                        <span id="notify">{{$total}}</span>
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

                        // echo "<pre>";print_r($set_menu_arr);
                        // print_r($get_columns);exit; 
                        // $counter = 0;
                        // foreach ($get_columns as $get_key => $get_value) {
                        //              if($counter != 0){
                        //                 unset($set_menu_arr[$get_key]);
                        //              }
                        //              $counter++;
                        //       }

                        foreach ($get_columns_clone as $get_key => $get_value) {


                           // echo "<pre> main values :: <br>";print_r($get_value);
                           if (sizeof($get_value) > 1) {
                              foreach ($get_value as $subkey => $subvalue) {
                                 //                       echo "<pre> test $subkey";
                                 //                       print_r($set_menu_arr);
                                 // print_r($get_value);exit;


                                 $first_value = key($get_value);
                                 if (key($get_value) != $subkey && (isset($set_menu_arr[$subkey]))) {
                                    // $unset_var = (isset($set_menu_arr[$subkey]))? unset($set_menu_arr[$subkey]):"";     
                                    unset($set_menu_arr[$subkey]);
                                 }
                                 # code...
                                 // echo "sub key :: $subkey <br>";
                                 // echo "<pre> values :: <br>";print_r($subvalue);
                                 // echo "<pre> firsst :: <br>";print_r($first_value);
                              }
                           }
                        }
                        // exit;
                        //            echo "<pre> test";
                        // print_r($get_columns_clone);exit;

                        ?>
                        @foreach($set_menu_arr as $cust_row)
                        <?php
                        // echo "<pre> test";
                        // print_r($cust_row['parent_menu']['child_menu']);
                        // exit;
                        ?>
                        <li class="m_nav_link mega_menu">
                           <a href="{{ url('/product_listing',$cust_row['parent_menu']['cat_id'])}}"><?php echo $cust_row['parent_menu']['name']; ?></a>
                           <?php if (isset($cust_row['parent_menu']['child_menu']) && !empty($cust_row['parent_menu']['child_menu'])) { ?>
                              <div class="menu-drop">
                                 <div class="cus_container">
                                    <ul class="d-lg-flex">
                                       <li class="col-md-2">
                                          <ul>
                                             <?php foreach ($cust_row['parent_menu']['child_menu'] as $child_key => $child_val) { ?>
                                                <li><a href="{{ url('/product_listing',$child_val['child_id'])}}"><?php
                                                                                                                  echo $child_val['child_name'];
                                                                                                                  ?> </a></li>
                                             <?php } ?>
                                             <!--<li class="v_all"><a href="#">Shop All</a></li>-->
                                          </ul>
                                       </li>
                                       {{-- <li class="col-lg-6 bst_sl">
                                          <h4 class="mega-header">Best Sellers <a class="shop_al" href="#">Shop All</a></h4>
                                          <ul class="mega_best_sellrs d-lg-flex">
                                             <li class="col-md-4"> <a href="#"> <img src="{{'/assets/homecss/images/MImg_1.png'}}" alt=""> </a></li>
                                             <li class="col-md-4"> <a href="#"><img src="{{'/assets/homecss/images/MImg_2.png'}}" alt=""> </a></li>
                                             <li class="col-md-4"> <a href="#"><img src="{{'/assets/homecss/images/MImg_3.png'}}" alt=""> </a></li>
                                          </ul>
                                       </li> --}}
                                    </ul>
                                 </div>
                              </div>
                           <?php } ?>
                        </li>
                        @endforeach
                     </ul>
                  </div>
                  <div class="col ml-md-auto view_al">
                     <a href="{{ url('/all_categories') }}">View All</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   </header>
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
 