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
                  <form action="{{ url('/vendor/bank',$payment->id)}}" id="addcat" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Update Bank</font>
                        </div>
                        <div class="options float-right">
                           <button type="submit" name="save" value="save" class="btn btn-warning">
                           <i class="fa fa-check"></i>
                           <span><font style="vertical-align: inherit;">Save</font></span>
                           </button>
                        </div>
                     </div>
                     </form>
                     <div class="cus_dashboard">
                        <div class="row mt-2">
                           <div class="col-xl-12">
                              <div class="card shadow-sm mb-4">
                                 <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">
                                    <div class="col-lg-12 nav-aside">
                                       <ul class="nav nav-tabs nav-tabs-line">
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Bank info</font></span></a></li>
                                          
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
                                                            <label><font style="vertical-align: inherit;">Bank Name</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="bank_name" type="text" value="{{ $payment->bank_name }}"><span class="text-danger">{{ $errors->first('bank_name') }}</span>                                
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">Branch Name</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Seo-compliant URL alias for search filters (optional)."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="branch_name" type="text" value="{{ $payment->branch_name }}"><span class="text-danger">{{ $errors->first('branch_name') }}</span>                                
                                                      </td>
                                                   </tr>
                                                   <!-- <tr class="brek"></tr> -->
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">Account Number</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="ac_number" type="text" value="{{ $payment->ac_number }}"><span class="text-danger">{{ $errors->first('ac_number') }}</span>         
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">Bank IFSC code</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="bank_ifsc_code" type="text" value="{{ $payment->bank_ifsc_code }}"><span class="text-danger">{{ $errors->first('bank_ifsc_code') }}</span>                   
                                                      </td>
                                                   </tr>
                                                   <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label ><font style="vertical-align: inherit;">Account Holder Name</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Specifies display order. 1 represents the top of the list."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="ac_holder_name" type="text" value="{{ $payment->ac_holder_name }}"><span class="text-danger">{{ $errors->first('ac_holder_name') }}</span>                   
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script>
    $(document).ready(function () {
    $('#addcat').validate({ // initialize the plugin  
    rules: {
      bank_name: {
        required: true,
      },

      branch_name: {
        required: true,
      },

      ac_number: {
        required: true,
        maxlength: 14
      },

      bank_ifsc_code: {
        required: true,
      },

      ac_holder_name: {
        required: true,
      },    
    },
    messages: {
        
      bank_name: {
        required: "Please enter bank name",
        maxlength: "Your last name maxlength should be 50 characters long."
      },
      branch_name: {
        required: "Please enter branch name",
        maxlength: "Your last name maxlength should be 50 characters long."
      },
      ac_number: {
        required: "Please enter bank account number",
        maxlength: "Your last name maxlength should be 50 characters long."
      },
      bank_ifsc_code: {
        required: "Please enter bank ifsc code",
      },
      ac_holder_name: {
        required: "Please enter account holder name",
      },  
    },
    });
});
</script>