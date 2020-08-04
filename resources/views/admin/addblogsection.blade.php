@extends('admin.layouts.master')
@section('content')
@include('admin.include.top')


<!-- for select product -->
 <style>
   .error{ color:red; } 
   .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
    width: 100% !important;
}
   /*.bootstrap-select > select {
    position: initial !important;
    bottom: 65px;
    left: 100% !important;
    width: 100% !important;
    height: 100% !important;
    opacity: 1 !important;
     border: 1px solid !important; 
}*/

.bootstrap-select.btn-group .dropdown-menu.inner {
  padding: 8px !important;
  margin: 4px !important;
  }

ul.dropdown-menu.inner {
    display: block !important;
}

  .dropdown-menu.open.show {
    /* max-height: 1042px; */
    /* overflow: hidden; */
    /* min-height: 0px; */
    position: inherit !important;
    transform: translate3d(0px, 48px, 0px);
    top: -49px !important;
    left: 0px;
    will-change: transform;
}

  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
    $('select').selectpicker();
  </script>

  <!-- for select product -->

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
                     <form id="addcat" action="{{ url('/admin/addblogsection')}}" accept-charset="utf-8" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="cph">
                        <div class="row section-header justify-content-between">
                           <div class="cus_title col-md-4">
                              <font style="vertical-align: inherit;">Add Section</font>
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
                                             <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Add Section</font></span></a></li>
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
                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">SELECT PRODUCT</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select class="selectpicker" name="product_id[]" multiple data-live-search="true">
                                                          @foreach($data as $product)
                                                            <option value="{{ $product->id }}"><font style="vertical-align: inherit;">{{ $product->product_name }}</font></font>
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                      </td>
                                                   </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label>Section Title(EN)
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="blogsection_title_en" type="text" value="">                                
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td class="adminTitle">
                                                            <div class="ctl-label">
                                                               <label><font style="vertical-align: inherit;">Section Title(Ar)</font>
                                                               </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                            </div>
                                                         </td>
                                                         <td class="adminData">
                                                            <input class="text-box single-line" name="blogsection_title_ar" type="text" value="">                                
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label for="AllowCustomersToSelectPageSize"><font style="vertical-align: inherit;">Section Status</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="Whether customers can choose the page size from a predefined list of options."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select class="form-control list-box tri-state select2-hidden-accessible" tabindex="-1" aria-hidden="true" name="blogsection_status">
                                                            
                                                            <option value="1"><font style="vertical-align: inherit;">Active</font>
                                                            </option>
                                                            <option value="0"><font style="vertical-align: inherit;">Inactive</font>
                                                            </option>
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
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
<!-- for select product  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script>
$(document).ready(function(){
  $('.show').on("keyup", function() {
    var value = $('input[autocomplete]').val();
    //alert(value);
    $(".inner li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- for select product  -->
