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
                  <form action="{{ url('/admin/comission_update',$comission->id)}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     {{ method_field('PATCH') }}
                  <div class="cph">
                     <div class="row section-header justify-content-between">
                        <div class="cus_title col-md-4">
                           <font style="vertical-align: inherit;">Update Comission</font>
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
                                          <li class="nav-item"><a href="#tab-1" data-toggle="tab" data-loaded="true" class="nav-link active show"><span class="tab-caption"><font style="vertical-align: inherit;">Update Comission</font></span></a></li>
                                          
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
                                                            <label for="BadgeStyle"><font style="vertical-align: inherit;">Select Order Id</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Retrieves or sets the type of brand to be displayed next to the category link in the menus"  data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <select data-val="true" data-val-number="The field 'Badge stil' must be a number." data-val-required="" id="vendor_id" name="vendor_id" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                            <option selected="selected" value="">Select Order Id
                                                            </option>
                                                            @foreach($data as $order)
                                                            <option value="{{ $order->id }}" {{ $order->id == $comission->vendor_id ? 'selected' : '' }}><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{ $order->name }}</font></font>
                                                            </option>
                                                            @endforeach
                                                         </select>
                                                         <i class="fas fa-caret-down sel_dwn-add_new"></i>
                                                      </td>
                                                    </tr> 
                                                    <tr>
                                                      <td class="adminTitle">
                                                         <div class="ctl-label">
                                                            <label><font style="vertical-align: inherit;">Enter Comission Rate</font>
                                                            </label><a class="hint" href="#" onclick="return false;" tabindex="-1" data-toggle="tooltip" data-placement="left" title="The name of the specification attribute."><i class="fa fa-question-circle"></i></a>
                                                         </div>
                                                      </td>
                                                      <td class="adminData">
                                                         <input class="text-box single-line" name="comission_rate" type="text" value="{{ $comission->comission }}">                                
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