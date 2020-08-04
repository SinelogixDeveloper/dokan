@extends('admin.layouts.master')
@section('content')
@include('admin.include.top')
<style>
   .error{ color:red; } 
  </style>
<body> 
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
                  <form action="{{ url('/admin/add_business_category')}}" accept-charset="utf-8" method="post" id="addcat" enctype="multipart/form-data">
                     {{ csrf_field() }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Add Business Category</font>
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
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Business Category info</font></span></a></li>
                                          
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
                                                            <label><font style="vertical-align: inherit;">Business Category Name</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="business_category_name" type="text" value="">   
                                                         <span class="text-danger">{{ $errors->first('business_category_name') }}</span>                          
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Business Status</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="business_status">
                                                            <option selected="selected" value=""></option>
                                                            <option value="1"><font style="vertical-align: inherit;">Active</font>
                                                            </option>
                                                            <option value="0"><font style="vertical-align: inherit;">Inactive</font>
                                                            </option>
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                         <span class="text-danger">{{ $errors->first('business_status') }}</span>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#addcat').validate({ // initialize the plugin  
    rules: {
      business_category_name: {
        required: true,
      },

      business_status: {
        required: true,
      },
          
    },
    messages: {
        
      business_category_name: {
        required: "Please enter name",
        maxlength: "Your last name maxlength should be 50 characters long."
      },
      
      business_status: {
        required: "Please select the status",
      },
      
    },
    });
});
</script>
