@extends('vendor.layouts.master')
@section('content')
@include('vendor.include.top')
<style>
   .error{ color:red; } 
  </style>
<body>
   <div class="main-content" id="panel">
      <!-- Topnav -->
      <!-- Header -->
      <!-- Header -->
      @include('vendor.include.sidebar')
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row">
            <div class="col-xl-12">
               <div class="card dasbdr_wrapper">
                  <form action="{{url('/vendor/update-password')}}" id="addcat" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Change Password</font>
                        </div>
                        <div class="options float-right">
                           <button type="submit" name="save" value="save" class="btn btn-warning">
                           <i class="fa fa-check"></i>
                           <span><font style="vertical-align: inherit;">Save</font></span>
                           </button>
                        </div>
                     </div>
                     </form>
                     @if ($message = Session::get('error'))
                         <div class="alert alert-success alert-block" style="background-color:#fb6340;border-color: #fb6340;">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                                 <strong>{{ $message }}</strong>
                         </div>
                         @endif
                     <div class="cus_dashboard">
                        <div class="row mt-2">
                           <div class="col-xl-12">
                              <div class="card shadow-sm mb-4">
                                 <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">
                                    <div class="col-lg-12 nav-aside">
                                       <ul class="nav nav-tabs nav-tabs-line">
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Change Password</font></span></a></li>
                                          
                                       </ul>
                                    </div>
                                    <div class="col-lg-12 nav-content">
                                       <div class="tab-content">
                                          <div class="tab-pane fade active show" role="tabpanel" id="tab-1">
                                             <table class="add_new_tbl">
                                                <tbody>
                                                  <tr>
                                                      <td class="adminTitle">
                                                          <div class="ctl-label">
                                                          <label><font style="vertical-align: inherit;">Old Password</font>
                                                          </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                          </div>
                                                      </td>
                                                      <td class="adminData">
                                                          <input class="form-control" name="old_password" type="password" value="">                                
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td class="adminTitle">
                                                          <div class="ctl-label">
                                                          <label><font style="vertical-align: inherit;">New Password</font>
                                                          </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                          </div>
                                                      </td>
                                                      <td class="adminData">
                                                          <input class="form-control" name="new_password" type="password" value="">                                
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td class="adminTitle">
                                                          <div class="ctl-label">
                                                          <label><font style="vertical-align: inherit;">Confirm Password</font>
                                                          </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The category's name."><i class="fa fa-question-circle"></i></a>
                                                          </div>
                                                      </td>
                                                      <td class="adminData">
                                                          <input class="form-control" name="confirm_password" type="password" value="">                               
                                                      </td>
                                                  </tr>                                                                                                                                                    
                                                </tbody>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               <!-- </form> -->
               </div>
            </div>
         </div>
         <!-- Footer -->
         @include('vendor.include.footer')
      </div>
   </div>
   @include('vendor.include.bottom')
</body>
@endsection
