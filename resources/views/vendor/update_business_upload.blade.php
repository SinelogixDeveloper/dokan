@extends('vendor.layouts.master')
@section('content')
@include('vendor.include.top')
<style>
   .error{ color:red; } 
  </style>
<body> 
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
                  <form action="{{ url('/vendor/update_business_upload',$business_upload->id)}}" accept-charset="utf-8" method="post" id="addcat" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Update Business Upload</font>
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
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Business Upload info</font></span></a></li>
                                          
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
                                                            <label><font style="vertical-align: inherit;">Business Title</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="business_title" type="text" value="{{ $business_upload->business_title }}">   
                                                         <span class="text-danger">{{ $errors->first('business_title') }}</span>                          
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Select Business Category</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="product_categories" name="upload_business_category" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                          <option selected="selected" value="">Select Busines Category</option>
                                                            @foreach($data as $category)
                                                            @if($category->parent_category =='')
                                                            <option value="{{ $category->category_name }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>
                                                            </option>
                                                            @endif
                                                            @endforeach
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Select Business SubCategory</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="product_categories" name="upload_business_subcategory" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                          <option selected="selected" value="">Select Busines Category</option>
                                                            @foreach($data as $category)
                                                            @if($category->parent_category !='')
                                                            <option value="{{ $category->category_name }}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $category->category_name }}</font></font>
                                                            </option>
                                                            @endif
                                                            @endforeach
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label><font style="vertical-align: inherit;">Business Location</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="upload_business_location" type="text" value="{{ $business_upload->upload_business_location }}">   
                                                         <span class="text-danger">{{ $errors->first('business_title') }}</span>                          
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="PictureId"><font style="vertical-align: inherit;">Upload Images
                                                            </font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Category Picture.
                                                               "><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <div class="fileupload-container">
                                                            <div class="fileupload-thumb-stage">
                                                               <div class="fileupload-thumb">
                                                                  <input class="hidden" data-val="true" data-val-number="The field 'Bild' must be a number." id="PictureId" name="upload_images " type="hidden" value="">
                                                               </div>
                                                            </div>
                                                            <div class="fileupload-controls">
                                                               <div class="fileupload">
                                                                  <div class="fileupload-buttons">
                                                                     <span class="btn btn-secondary fileinput-button">
                                                                     <i class="fa fa-upload"></i><span><font style="vertical-align: inherit;">Upload a file</font></span>
                                                                     <input type="file" name="upload_images">
                                                                     </span>                                              
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </td>
                                                   </tr>
                                                   <!-- <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Business  Status</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="business_subcategory_status">
                                                            <option selected="selected" value=""></option>
                                                            <option value="1"><font style="vertical-align: inherit;">Active</font>
                                                            </option>
                                                            <option value="0"><font style="vertical-align: inherit;">Inactive</font>
                                                            </option>
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                         <span class="text-danger">{{ $errors->first('business_subcategory_status') }}</span>
                                                      </td>
                                                   </tr> -->
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
         @include('vendor.include.footer')
      </div>
   </div>
   @include('vendor.include.bottom')
</body>
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#addcat').validate({ // initialize the plugin  
    rules: {
      business_subcategory_name: {
        required: true,
      },

      business_subcategory_status: {
        required: true,
      },
          
    },
    messages: {
        
      business_subcategory_name: {
        required: "Please enter subcategory name",
        //maxlength: "Your last name maxlength should be 50 characters long."
      },
      
      business_subcategory_status: {
        required: "Please select the status",
      },
      
    },
    });
});
</script>
