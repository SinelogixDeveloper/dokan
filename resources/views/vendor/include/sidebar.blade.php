<style> 
   .badge { 
        position: relative; 
        top: -57px; 
        left: 27px; 
        background-color: #fb7540;
        border: 1px solid #fb7540; 
        border-radius: 50%; 
       }  
       a.btn.btn-info {
        background-color: #525f7f;
        border-color: #525f7f;
}
</style>
{!! Helper::locked() !!}
<div class="header pb-6 d-flex align-items-center" style="min-height: 160px;">

      <nav class="sidenav navbar nav_main" id="sidenav-main">
        
          <!-- Brand -->
          <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="index.html">
              <img src="{{asset('/assets/img/brand/logo.png')}}" class="navbar-brand-img" alt="...">
            </a>
          </div>
          <div class="navbar-inner">
            <!-- Collapse -->
            <div class="sidenav_mob" id="sidenav-collapse-main">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <!-- Nav items -->
              <ul class="navbar-nav m-main">
                <li data-id="nav-dashboard" class="nav-item dropdown d-none d-md-block">
                  <a class="nav-link" href="{{ url('/vendor/dashboard')}}">
                    <i class=" text-white fa fa-home navbar-icon" ></i>
                    <span class="navbar-label">Dashboard</span>
                  </a>
                </li>
                <li data-id="nav-catalog" class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
                    <i class=" text-white fa fa-cube navbar-icon"></i>
                    <span class="navbar-label">Catalog</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li data-id="products">
                      <a class="dropdown-item lock" href="{{ url('/vendor/product')}}">
                        <i class="fa-fw fa fa-cube"></i>
                        Manage products
                      </a>
                    </li>
                    <li data-id="categories-list">
                      <a class="dropdown-item" href="{{ url('/vendor/business_upload')}}">
                        <i class="fa-fw fa fa-sitemap"></i>
                        Business Upload
                      </a>
                    </li>
                    
                  </ul>
                </li>
                <li data-id="nav-sales" class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
                    <i class=" text-white fa fa-chart-line navbar-icon"></i>
                    <span class="navbar-label">Sales</span>
                  </a>
                  <ul class="dropdown-menu">
                    <li data-id="orders">
                      <a class="dropdown-item lock" href="{{ url('/vendor/order_request')}}">
                        <i class="fa-fw far fa-chart-bar"></i>
                        Orders Request
                      </a>
                    </li>
                    <li data-id="orders">
                      <a class="dropdown-item lock" href="{{ url('/vendor/my_order')}}">
                        <i class="fa-fw fa fa-cube"></i>
                        My Orders
                      </a>
                    </li>
                    <!--<li data-id="orders">-->
                    <!--  <a class="dropdown-item lock" href="{{ url('/vendor/payment')}}">-->
                    <!--    <i class="fa-fw fa fa-cube"></i>-->
                    <!--    Payment-->
                    <!--  </a>-->
                    <!--</li>-->
                  </ul>
                </li>
                
                </ul>
              <ul class="navbar-nav pro_mnu">
                  
                  <li class="nav-item dropdown" title="Notification" >
                  <!-- <a href="#" class="notification">
                    <span>Inbox</span>
                    <span class="badge">3</span>
                  </a> -->
                  <span id="group"> 
                 <a href="{{ url('/vendor/notification')}}" class="btn btn-info">  
                  <i class="fa fa-envelope"></i> 
                 </a> 
                 <span class="badge badge-light">{!! Helper::vendor_noti() !!}</span> 
               </span>
                </li>

                <li class="nav-item dropdown" title="Actions">
                  <a class="nav-link dropdown-toggle navbar-tool" href="javascript:void(0)"  
                    data-toggle="dropdown">
                    <i class="text-white fa fa-cog navbar-icon"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="{{ url('/vendor/feedback')}}">
                      <i class="far fa-fw fa-eye"></i>
                      Feedback
                    </a>
                    <!--<a class="dropdown-item" href="#">-->
                    <!--  <i class="far fa-fw fa-eye"></i>-->
                    <!--  Preview Mode-->
                    <!--</a>-->
                    <!--<div class="dropdown-divider"></div>-->
                    <!--<a class="dropdown-item" href="#">-->
                    <!--  <i class="far fa-fw fa-trash-alt"></i>-->
                    <!--  Clear cache-->
                    <!--</a>-->
                    <!--<a class="dropdown-item" href="">-->
                    <!--  <i class="fa fa-fw"></i>-->
                    <!--  Clear database cache-->
                    <!--</a>-->
                    <!--<div class="dropdown-divider"></div>-->
                    <!--<a class="dropdown-item" id="restart-application" href="#" data-url="#">-->
                    <!--  <i class="fa fa-fw fa-power-off"></i>-->
                    <!--  Restart application-->
                    <!--</a>-->
                  </div>
                </li>



                <!--<li id="navtool-help"  title="Help" class="nav-item dropdown d-md-block">-->
                <!--  <a class="nav-link dropdown-toggle navbar-tool" href="javascript:void(0)" -->
                <!--    data-toggle="dropdown">-->
                <!--    <i class="text-white fa fa-question-circle navbar-icon"></i>-->
                <!--  </a>-->
                <!--  <div class="dropdown-menu dropdown-menu-left">-->
                <!--    <a class="dropdown-item" href="" data-lang="en"-->
                <!--      target="help">-->
                <!--      <i class="fa fa-fw fa-book"></i>-->
                <!--      Documentation-->
                <!--    </a>-->
                <!--    <a class="dropdown-item" href="#"  data-lang="en" target="help">-->
                <!--      <i class="fa fa-fw fa-comment"></i>-->
                <!--      Community-->
                <!--    </a>-->
                <!--    <div class="dropdown-divider"></div>-->
                <!--    <a class="dropdown-item" href="#">-->
                <!--      <i class="fa fa-fw fa-info-circle"></i>-->
                <!--      About SmartStore.NET-->
                <!--    </a>-->
                <!--  </div>-->
                <!--</li>-->

                <li class="nav-item dropdown" title="Account" >
                  <a id="current-user" class="nav-link dropdown-toggle navbar-tool" data-toggle="dropdown"
                  href="#">

                    <i class="text-white fa fa-user navbar-icon"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-left">
                    <a class="dropdown-item" href="{{url('/vendor/profile')}}">
                      <i class="fa fa-fw fa-user"></i>
                      Account
                    </a>
                    <a class="dropdown-item lock" href="{{ url('/vendor/product')}}">
                        <i class="fa-fw fa fa-cube"></i>
                        My products
                    </a>
                    <a class="dropdown-item lock" href="{{ url('/vendor/my_order')}}">
                        <i class="fa-fw far fa-chart-bar"></i>
                        My Order
                    </a>
                    <a class="dropdown-item" href="{{url('/vendor/change-password')}}">
                      <i class="fa fa-fw fa-user"></i>
                      ChangePassword
                    </a>
                    <a class="dropdown-item" href="{{ url('/vendor/logout')}}">
                      <i class="fal fa-fw fa-sign-out-alt"></i>
                      Logout?
                    </a>
                  </div>
                </li>

              </ul>

            </div>




          </div>
        
      </nav>
      <!-- Mask -->
      <span class="mask bg-gradient-default"></span>
      <!-- Header container -->

    </div>