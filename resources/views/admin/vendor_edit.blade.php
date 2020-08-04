@extends('admin.layouts.master')
@section('content')
@include('admin.include.top')
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
            <form action="{{ url('/admin/vendor/update',$vendor->id)}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
            <div class="cph">
               <div class="row section-header justify-content-between">
                  <div class="cus_title col-md-4">
                     <font style="vertical-align: inherit;">Vendor Information</font>
                  </div>
                  <div class="options float-right">
                     <button type="submit" name="save" value="save" class="btn btn-warning">
                     <i class="fa fa-check"></i>
                     <span><font style="vertical-align: inherit;">Save</font></span>
                     </button>
                     <!-- <button type="submit" name="save" value="save-continue" class="btn btn-secondary">
                     <span><font style="vertical-align: inherit;">Save and continue Editing</font></span>
                     </button> -->
                  </div>
               </div>
               <div class="cus_dashboard">
                  <div class="row mt-2">
                     <div class="col-xl-12">
                        <div class="card shadow-sm mb-4">
                           <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">
                              <div class="col-lg-12 nav-aside">
                                 <ul class="nav nav-tabs nav-tabs-line">
                                    <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Vendor info</font></span></a></li>
                                    <!-- <li class="nav-item"><a href="#tab-2" data-toggle="tab" data-loaded="true" class="nav-link"><span class="tab-caption"><font style="vertical-align: inherit;">Options</font></span></a></li>
                                    <li class="nav-item"><a href="#tab-3" data-toggle="tab" data-loaded="true" class="nav-link"><span class="tab-caption"<font style="vertical-align: inherit;">Stores</font></span></a></li> -->
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
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <input class="text-box single-line" name="name" type="text" value="{{ $vendor->name }}">                                
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label ><font style="vertical-align: inherit;">Emial</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Seo-compliant URL alias for search filters (optional)."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <input class="text-box single-line" name="email" type="text" value="{{ $vendor->email }}">                                
                                                </td>
                                             </tr>
                                             
                                             <tr class="brek"></tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label for="BadgeStyle"><font style="vertical-align: inherit;">Vendor Status</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="BadgeStyle" name="vendor_status" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                      <option value="1" {{ $vendor->vendor_status == 1 ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Active</font></font>
                                                      </option>
                                                      <option value="0" {{ $vendor->vendor_status == 0 ? 'selected' : '' }}><font style="vertical-align: inherit;">Inactive</font>
                                                      </option>
                                                      
                                                   </select>
                                                   <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label for="PictureId"><font style="vertical-align: inherit;">Vendor Picture
                                                      </font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                         "><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="fileupload-container">
                                                      <div class="fileupload-thumb-stage">
                                                         <div class="fileupload-thumb">
                                                            <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="PictureId" name="vendor_image" type="hidden" value="">
                                                         </div>
                                                      </div>
                                                      <div class="fileupload-controls">
                                                         <div class="fileupload">
                                                            <div class="fileupload-buttons">
                                                               <span class="btn btn-secondary fileinput-button">
                                                               <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>
                                                               <input type="file" name="vendor_image">
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