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
                     <form id="addcat" action="{{ url('/admin/addsubbanner')}}" accept-charset="utf-8" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="cph">
                        <div class="row section-header justify-content-between">
                           <div class="cus_title col-md-4">
                              <font style="vertical-align: inherit;">Add Sub Banner</font>
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
                                             <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Sub Banner</font></span></a></li>
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
                                                               <label><font style="vertical-align: inherit;">Sub Banner Title(EN)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="subbannertitle_en" type="text" value="">                                
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label><font style="vertical-align: inherit;">Sub Banner Title(Ar)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="subbannertitle_ar" type="text" value="">                                
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label ><font style="vertical-align: inherit;">Sub Banner short Discription(EN)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="subbannerdiscription_en" type="text" value="">                                
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label ><font style="vertical-align: inherit;">Sub Banner short Discription(Ar)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="subbannerdiscription_ar" type="text" value="">                                
                                                         </td>
                                                      </tr>

                                                      <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="PictureId"><font style="vertical-align: inherit;">Sub Banner Picture
                                                            </font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                               "><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <div class="fileupload-container">
                                                            <div class="fileupload-thumb-stage">
                                                               <div class="fileupload-thumb">
                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="" name="subbannerimages" type="hidden" value="">
                                                               </div>
                                                            </div>
                                                            <div class="fileupload-controls">
                                                               <div class="fileupload">
                                                                  <div class="fileupload-buttons">
                                                                     <span class="btn btn-secondary fileinput-button">
                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a Banner</font></span>
                                                                     <input type="file" name="subbannerimages" id="subbannerimages  ">
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
                                                               <label ><font style="vertical-align: inherit;">Sub Banner Url</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="subbannerurl" type="text" value="">                                
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
                  </div>
               </div>
            </div>
            <!-- Footer -->
            
         </div>
   </div>
   @include('admin.include.bottom')
</body>
@endsection
