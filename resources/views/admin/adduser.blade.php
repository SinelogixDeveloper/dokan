@extends('admin.layouts.master')
@section('content')
@include('admin.include.top')
<style type="text/css">
input.text-box.single-line.password
{
   font-size: 14px;
line-height: 1.5;
display: block;
width: 100%;
height: calc(1.5em + 1.25rem + 5px);
padding: .625rem .75rem;
transition: all .15s cubic-bezier(.68, -.55, .265, 1.55);
color: #8898aa;
border: 1px solid #dee2e6;
border-radius: .25rem;
background-color: #fff;
background-clip: padding-box;
box-shadow: 0 3px 2px rgba(233, 236, 239, .0
}
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
                  <form action="{{ url('/admin/adduser')}}" accept-charset="utf-8" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Add User</font>
                        </div>
                        <div class="options float-right">
                           <button type="submit" name="save" value="save" class="btn btn-warning">
                           <i class="fa fa-check"></i>
                           <span><font style="vertical-align: inherit;">Save</font></span>
                           </button>
                        </div>
                     </div>
                     <div class="cus_dashboard">
                        <div class="row mt-2">
                           <div class="col-xl-12">
                              <div class="card shadow-sm mb-4">
                                 <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">
                                    <div class="col-lg-12 nav-aside">
                                       <ul class="nav nav-tabs nav-tabs-line">
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">User info</font></span></a></li>
                                          
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
                                                            <label><font style="vertical-align: inherit;">User Name</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="user_name" type="text" value="">                                
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">User Email</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Seo-compliant URL alias for search filters (optional)."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="user_email" type="text" value="">                                
                                                      </td>
                                                   </tr>
                                                   <!-- <tr class="brek"></tr> -->
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">User Mobile</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="user_mobile" type="text" value="">                   
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">User Password</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line password" name="user_password" type="password" value="">                   
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="PictureId"><font style="vertical-align: inherit;">User Picture
                                                            </font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                               "><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <div class="fileupload-container">
                                                            <div class="fileupload-thumb-stage">
                                                               <div class="fileupload-thumb">
                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="PictureId" name="profile_images" type="hidden" value="">
                                                               </div>
                                                            </div>
                                                            <div class="fileupload-controls">
                                                               
                                                               <div class="fileupload">
                                                                  <div class="fileupload-buttons">
                                                                     <span class="btn btn-secondary fileinput-button">
                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>
                                                                     <input type="file" name="profile_images">
                                                                     </span>                                              
                                                                  </div>
                                                               </div>
                                                               <div id="thumb-output"></div>
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
               </form>
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
