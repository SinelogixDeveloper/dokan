@extends('vendor.layouts.master')
@section('content')
@include('vendor.include.top')
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
            <div class="cph">
               <div class="row section-header justify-content-between">
                  <div class="cus_title col-md-4">
                     <font style="vertical-align: inherit;">View Feedback Details</font>
                  </div>
               </div>
               <div class="cus_dashboard">
                  <div class="row mt-2">
                     <div class="col-xl-12">
                        <div class="card shadow-sm mb-4">
                           <div class="tabbable tabs-left tabs-autoselect row new_horizon_tab_outer">
                              <div class="col-lg-12 nav-aside">
                                 <ul class="nav nav-tabs nav-tabs-line">
                                    <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Feedback Details</font></span></a></li>
                                    <!-- <li class="nav-item"><a href="#tab-2" data-toggle="tab" data-loaded="true" class="nav-link"><span class="tab-caption"><font style="vertical-align: inherit;">Billing & Shipping</font></span></a></li>
                                    <li class="nav-item"><a href="#tab-3" data-toggle="tab" data-loaded="true" class="nav-link"><span class="tab-caption"<font style="vertical-align: inherit;">Products</font></span></a></li> -->
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
                                                   <div class="form-control-plaintext">{{ $feedback->user_name }}
                                                   </div>                               
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label><font style="vertical-align: inherit;">User Email</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="form-control-plaintext">{{ $feedback->user_email }}
                                                   </div>                                
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label><font style="vertical-align: inherit;">User Phone</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="form-control-plaintext">{{ $feedback->user_phone }}
                                                   </div>                                
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label><font style="vertical-align: inherit;">Product Name</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="form-control-plaintext">{{ $data[0]->getTranslation('product_name', 'en') }}
                                                   </div>                                
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label><font style="vertical-align: inherit;">User Feedback</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="form-control-plaintext">{{ $feedback->user_feedback }}
                                                   </div>                                
                                                </td>
                                             </tr>
                                             <!-- <tr class="brek"></tr> -->
                                             <tr>
                                                <td class="adminTitle">
                                                   <div class="ctl-label">
                                                      <label><font style="vertical-align: inherit;">Feedback Date</font>
                                                      </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                   </div>
                                                </td>
                                                <td class="adminData">
                                                   <div class="form-control-plaintext">{{ $feedback->created_at }}
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

