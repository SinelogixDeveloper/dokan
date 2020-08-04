@include('layouts.header')
<section class="section-2" style="padding-top: 40px; padding-bottom:80px; ">
   <div class="cus_container">
      <div class="row">
         <div class="col-md-12">
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">My Profile</li>
               </ol>
            </nav>
         </div>
      </div>
      <div class="row" style="margin-top: 10px;">
         <div class="col-md-2">
            <div class="account-sidebar">
               <ul class="nav nav-pills">
                  <li>
                     <div class="a  active" data-toggle="pill" href="#home"><img src="{{'/assets/homecss/images/order.png'}}"><span>My Orders</span></div>
                  </li>
                  <li>
                     <div class="a" data-toggle="pill" href="#menu1"><img src="{{'/assets/homecss/images/pi.png'}}" style="width: 16px;
                        left: 18px;"><span>Personel Information</span></div>
                  </li>
                  <li>
                     <div class="a" data-toggle="pill" href="#menu2"><img src="{{'/assets/homecss/images/address.png'}}"><span>Manage Addresses</span> </div>
                  </li>
                  <li>
                     <div class="a" data-toggle="pill" href="#menu3"><img src="{{'/assets/homecss/images/wishlist.png'}}" style="width: 19px;
                        left: 18px;"><span>Wishlist</span></div>
                  </li>
                  <li>
                     <div class="a" data-toggle="pill" onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><span>Log Out</span></div>
                  </li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
               </ul>
            </div>
         </div>
         <div class="col-md-10">
            <div class="tab-content">
               <div id="home" class="tab-pane fade active show">
                  <div class="cart-wrap">
                     <div class="container">
                        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
                           <div class="col-md-1">
                              <img style="margin-top: 7px;" src="{{'/assets/homecss/images/cart-img.png'}}">
                           </div>
                           <div class="col-md-11">
                              <span class="chk-amnt">
                                 <h4>QAR 20.00</h4>
                              </span>
                              <small class="form-text text-muted">Order ID 943493259594</small>
                              <p class="f-15">Magnum Slim Women Blue Jeans</p>
                              <p><small class="text-muted">Delivery on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                                 <small style="margin-left: 25px;" class="text-muted">Ordered on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                              </p>
                           </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
                           <div class="col-md-1">
                              <img style="margin-top: 7px;" src="{{'/assets/homecss/images/cart-img.png'}}">
                           </div>
                           <div class="col-md-11">
                              <span class="chk-amnt">
                                 <h4>QAR 20.00</h4>
                              </span>
                              <small class="form-text text-muted">Order ID 943493259594</small>
                              <p class="f-15">Magnum Slim Women Blue Jeans</p>
                              <p><small class="text-muted">Delivery on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                                 <small style="margin-left: 25px;" class="text-muted">Ordered on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                              </p>
                           </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
                           <div class="col-md-1">
                              <img style="margin-top: 7px;" src="{{'/assets/homecss/images/cart-img.png'}}">
                           </div>
                           <div class="col-md-11">
                              <span class="chk-amnt">
                                 <h4>QAR 20.00</h4>
                              </span>
                              <small class="form-text text-muted">Order ID 943493259594</small>
                              <p class="f-15">Magnum Slim Women Blue Jeans</p>
                              <p><small class="text-muted">Delivery on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                                 <small style="margin-left: 25px;" class="text-muted">Ordered on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                              </p>
                           </div>
                        </div>
                        <div class="row" style="border-bottom: 1px solid #dbdbdb; padding: 20px 0;">
                           <div class="col-md-1">
                              <img style="margin-top: 7px;" src="{{'/assets/homecss/images/cart-img.png'}}">
                           </div>
                           <div class="col-md-11">
                              <span class="chk-amnt">
                                 <h4>QAR 20.00</h4>
                              </span>
                              <small class="form-text text-muted">Order ID 943493259594</small>
                              <p class="f-15">Magnum Slim Women Blue Jeans</p>
                              <p><small class="text-muted">Delivery on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                                 <small style="margin-left: 25px;" class="text-muted">Ordered on</small><span class="cs-span"><b>Thu, Jul 5th'2020</b></span>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="menu1" class="tab-pane fade p-i in">
                <form method="post" action="{{ url('/myaccount/update',$userdata[0]->id)}}">
                  {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <h5>Personal Information</h5>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">First name</label></small>
                              <input type="text"  value="{{$userdata[0]->name}}"  class="form-control" id="exampleInputEmail1" disabled="disabled" aria-describedby="emailHelp">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Last name</label></small>
                              <input type="text" class="form-control" id="exampleInputEmail1" name="last_name" value="{{$userdata[0]->last_name}}" aria-describedby="emailHelp" placeholder="Doe">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Email</label></small>
                              <input type="email"  value="{{$userdata[0]->email}}" class="form-control" id="exampleInputEmail1" disabled="disabled" aria-describedby="emailHelp" placeholder="John@gmail.com">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Gender</label></small> 
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" {{ $userdata[0]->gender == 'male' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="inlineRadio1">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="female" {{ $userdata[0]->gender == 'female' ? 'checked' : '' }}>
                                 <label class="form-check-label" for="inlineRadio2">Female</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <small id="emailHelp" class="form-text text-muted"><label for="exampleInputEmail1">Mobile Number</label></small>
                              <input type="text" class="form-control"  value="{{$userdata[0]->mobile}}" id="exampleInputEmail1" disabled="disabled" aria-describedby="emailHelp" placeholder="98766 56876">
                           </div>
                           <button class="edt-btn" type="submit">EDIT</button>
                        </div>
                     </div>
                  </div>
                </form>
               </div>
               <div id="menu2" class="tab-pane fade">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="address-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><b>Jamnas Ahammed</b></p>
                                 </div>
                                 <div class="col-md-6" align="right">
                                    <div class="alter">  
                                       <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>
                                       <i class="fa fa-trash"><span>Remove</span></i>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <p style="margin-bottom: 6px;"><b>12345 09986</b></p>
                                    <span>Abc Building , XYZ street, 123456
                                    New City , Doha, Qatar
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="address-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><b>Jamnas Ahammed</b></p>
                                 </div>
                                 <div class="col-md-6" align="right">
                                    <div class="alter">  
                                       <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>
                                       <i class="fa fa-trash"><span>Remove</span></i>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <p style="margin-bottom: 6px;"><b>12345 09986</b></p>
                                    <span>Abc Building , XYZ street, 123456
                                    New City , Doha, Qatar
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="address-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><b>Jamnas Ahammed</b></p>
                                 </div>
                                 <div class="col-md-6" align="right">
                                    <div class="alter">  
                                       <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>
                                       <i class="fa fa-trash"><span>Remove</span></i>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <p style="margin-bottom: 6px;"><b>12345 09986</b></p>
                                    <span>Abc Building , XYZ street, 123456
                                    New City , Doha, Qatar
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="address-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><b>Jamnas Ahammed</b></p>
                                 </div>
                                 <div class="col-md-6" align="right">
                                    <div class="alter">  
                                       <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>
                                       <i class="fa fa-trash"><span>Remove</span></i>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <p style="margin-bottom: 6px;"><b>12345 09986</b></p>
                                    <span>Abc Building , XYZ street, 123456
                                    New City , Doha, Qatar
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="address-block">
                              <div class="row">
                                 <div class="col-md-6">
                                    <p><b>Jamnas Ahammed</b></p>
                                 </div>
                                 <div class="col-md-6" align="right">
                                    <div class="alter">  
                                       <i class="fa fa-pencil" style="margin-right: 20px;"> <span>Edit</span></i>
                                       <i class="fa fa-trash"><span>Remove</span></i>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <p style="margin-bottom: 6px;"><b>12345 09986</b></p>
                                    <span>Abc Building , XYZ street, 123456
                                    New City , Doha, Qatar
                                    </span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-4">
                           <button class="edt-btn">ADD NEW ADDRESS</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="menu3" class="tab-pane fade">
                  <h5>Wishlist</h5>
                  <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('layouts.footer')