@extends('admin.layouts.master')
@section('content')
@include('admin.include.top')
<style>
   .error{ color:red; } 
  </style>
<body>
   <div class="main-content" id="panel">
      <!-- Topnav -->
      <!-- Header -->
      <!-- Header -->
      @include('admin.include.sidebar')
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row">
            <div class="col-xl-12">
               <div class="card dasbdr_wrapper">
                  <form action="{{url('/admin/profile',$admin->id)}}" id="addcat" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Profile</font>
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
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Profile</font></span></a></li>
                                          
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
                                                          <label><font style="vertical-align: inherit;">Name</font>
                                                          </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The admin name."><i class="fa fa-question-circle"></i></a>
                                                          </div>
                                                      </td>
                                                      <td class="adminData">
                                                          <input class="form-control" name="name" type="text" value="{{$admin->name}}">                                
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td class="adminTitle">
                                                          <div class="ctl-label">
                                                          <label><font style="vertical-align: inherit;">Email Id</font>
                                                          </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The admin email."><i class="fa fa-question-circle"></i></a>
                                                          </div>
                                                      </td>
                                                      <td class="adminData">
                                                          <input class="form-control" name="email" type="text" value="{{$admin->email}}">                                
                                                      </td>
                                                  </tr>

                                                  <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="PictureId"><font style="vertical-align: inherit;">Update Admin Logo
                                                            </font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                               "><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <div class="fileupload-container">
                                                            <div class="fileupload-thumb-stage">
                                                               <div class="fileupload-thumb">
                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="" name="admin_logo" type="hidden" value="">
                                                               </div>
                                                            </div>
                                                            <div class="fileupload-controls">
                                                               <div class="fileupload">
                                                                  <div class="fileupload-buttons">
                                                                     <!-- <img id="image_preview_container" src="{{ URL::to('/') }}/category_images/image-preview.png"
                        alt="preview image" style="max-height: 150px;"> -->
                                                                     <span class="btn btn-secondary fileinput-button">
                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>
                                                                     <input type="file" name="admin_logo" id="admin_logo">
                                                                     </span>                                              
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </td>
                                                   </tr>

                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="PictureId"><font style="vertical-align: inherit;">Update Homepage Logo
                                                            </font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                               "><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <div class="fileupload-container">
                                                            <div class="fileupload-thumb-stage">
                                                               <div class="fileupload-thumb">
                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="" name="homepage_logo" type="hidden" value="">
                                                               </div>
                                                            </div>
                                                            <div class="fileupload-controls">
                                                               <div class="fileupload">
                                                                  <div class="fileupload-buttons">
                                                                     <!-- <img id="image_preview_container" src="{{ URL::to('/') }}/category_images/image-preview.png"
                        alt="preview image" style="max-height: 150px;"> -->
                                                                     <span class="btn btn-secondary fileinput-button">
                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>
                                                                     <input type="file" name="homepage_logo" id="homepage_logo">
                                                                     </span>                                              
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
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
         @include('admin.include.footer')
      </div>
   </div>
   @include('admin.include.bottom')
</body>
@endsection
