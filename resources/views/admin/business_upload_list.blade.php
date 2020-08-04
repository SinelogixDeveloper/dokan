@extends('admin.layouts.master')

@section('content')

@include('admin.include.top')

<style type="text/css">

   ul.pagination {

    margin-left: 10px;

    padding-top: 7px;

    letter-spacing: 12px;

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

                  <div class="cph">

                     <div class="section-header row">

                        <div class="cus_title col-md-8">

                           <i class="fa fa-sitemap"></i> Business Upload List

                           <div class="btn-group ml-2" style="vertical-align: text-top">

                              <a class="btn btn-outline-secondary btn-sm tooltip-toggle active" style="cursor:default" href="javascript:void(0)" data-original-title="" title="">

                              <i class="fa fa-bars"></i>

                              </a>

                              <a class="btn btn-outline-secondary btn-sm tooltip-toggle" href="" title="" data-original-title="switch to tree view">

                              <i class="fa fa-sitemap"></i>

                              </a>

                           </div>

                        </div>

                        <div class="options col-md-4 d-flex justify-content-end">

                           <!-- <a href="{{ url('vendor/add_business_upload')}}" class="btn btn-primary">

                           <i class="fa fa-plus"></i>

                           <span>Add new</span>

                           </a> -->

                           <div class="btn-group">

                              <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                              Export

                              </button>

                              <div class="dropdown-menu dropdown-menu-right">

                                 <a href="{{ url('admin/category/excelexport')}}" class="dropdown-item export-data-button" data-url="">

                                 <i class="fa fa-fw fa-code"></i>

                                 <span>Export selected to XML</span>

                                 </a>

                                 <a href="{{ url('admin/category/csvexport')}}" class="dropdown-item export-data-button" data-url="">

                                 <i class="far fa-fw fa-file-alt"></i>

                                 <span>Export selected to CSV</span>

                                 </a>

                                 <div class="dropdown-divider"></div>

                                 <a href="{{ url('admin/category/excelexport')}}" class="dropdown-item export-data-button" data-url="">

                                 <i class="fa fa-fw fa-code"></i>

                                 <span>Export all to XML</span>

                                 </a>

                                 <a href="{{ url('admin/category/csvexport')}}" class="dropdown-item export-data-button" data-url="">

                                 <i class="far fa-fw fa-file-alt"></i>

                                 <span>Export all to CSV</span>

                                 </a>

                              </div>

                           </div>

                        </div>

                     </div>

                     @if ($message = Session::get('success'))

                        <div class="alert alert-success alert-block" style="background-color:cornflowerblue;border-color: cornflowerblue;">

                           <button type="button" class="close" data-dismiss="alert">×</button>  

                                <strong>{{ $message }}</strong>

                        </div>

                     @endif

                     <div class="cus_dashboard">

                        <form action="{{ url('/admin/business_upload_filter')}}" method="post" >

                           {{ csrf_field() }}

                           <!-- <div class="row mt-3 grid-filter">

                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">

                                 <div class="ctl-label">

                                    <label for="SearchCategoryName">Business Title</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>

                                 </div>

                                 <input class="form-control" id="SearchCategoryName" name="category_name" type="text" value="">

                              </div>

                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">

                                 <div class="ctl-label">

                                    <label>&nbsp;</label>

                                 </div>

                                 <button type="submit" id="btnSearch" value="btnSearch" class="btn btn-secondary btn-block">

                                 <span>Apply filter</span>

                                 </button>

                              </div>

                           </div> -->

                        </form>

                        <div class="row mt-2">

                           <div class="col-xl-12">

                              <div class="card shadow-sm mb-4">

                                 <div class="d-flex tbl-highlight">

                                    <div class="mr-auto bd-highlight">

                                       <nav aria-label="Page navigation example">

                                          <ul class="pagination">

                                             <li class="page-item reld">

                                                <a class="page-link" href="#">

                                                <i class="fas fa-sync"></i>                            

                                                </a>

                                             </li>

                                             {{ $data->links() }}

                                          </ul>

                                       </nav>

                                    </div>

                                 </div>

                                 <div class="table-responsive">

                                    <table cellspacing="0" class="table cus_tbl table-striped m-0">

                                       <thead class="t-grid-header">

                                          <tr>

                                             <th scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>

                                             <th scope="col"><span class="t-link">Bank Statement</span></th>

                                             <!--<th scope="col"><span class="t-link">CR Document</span></th>-->

                                             <th scope="col"><span class="t-link">Merchant Aggrement</span></th>

                                             <!--<th scope="col"><span class="t-link">Trade License</span></th>-->

                                             <!--<th scope="col"><span class="t-link">Computer Card</span></th>-->

                                             <!--<th scope="col"><span class="t-link">Authorised Document</span></th>-->

                                             <th scope="col"><span class="t-link">Created By</span></th>

                                             <th scope="col"><span class="t-link">Status</span></th>

                                             <!-- <th scope="col"><span class="t-link">Creared Date</span></th> -->

                                             <th scope="col"><span class="t-link">Action</span></th>

                                          </tr>

                                       </thead>

                                       <tbody>

                                          <?php $number = 1; ?>

                                          @foreach($data as $row)

                                          <tr>

                                             <td style="text-align:center">

                                                <input type="checkbox" name="checkedRecords" value="{{ $row->id }}" class="checkboxGroups">

                                             </td>

                                             <td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/dokan/public/')  }}/business_upload_document/{{ $row->bank_proof }}" target="_blank">{{ $row->bank_proof }}</a></td>

                                             <!--<td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/auraqatar/public/')  }}/business_upload_document/{{ $row->cr_document }}" target="_blank">{{ $row->cr_document }}</a></td>-->

                                             <td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/dokan/public/')  }}/business_upload_document/{{ $row->merchant_document }}" target="_blank">{{ $row->merchant_document }}</a></td>

                                             <!--<td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/auraqatar/public/')  }}/business_upload_document/{{ $row->trade_document }}" target="_blank">{{ $row->trade_document }}</a></td>-->

                                             <!--<td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/auraqatar/public/')  }}/business_upload_document/{{ $row->computer_document }}" target="_blank">{{ $row->computer_document }}</a></td>-->

                                             <!--<td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ URL::to('/auraqatar/public/')  }}/business_upload_document/{{ $row->authorised_document }}" target="_blank">{{ $row->authorised_document }}</a></td>-->

                                             <td>{{ $row->vendor_id  }}</td>

                                             @if($row->upload_business_status =='1')

                                             <td align=""><i class="fas fa-check icon-active-true"></i></td>

                                             @else

                                             <td align=""><i class="fas fa-times icon-active-true"></i></td>

                                             @endif

                                             <td align="center"><!-- <a href="{{ url('admin/business_upload/active', $row->id )}}">Active</a> / --> <a href="{{ url('admin/business_upload/inactive/'.$vendor )}}">lock</a> / <a href="{{ url('admin/business_upload/unlock/'.$vendor )}}">Unlock</a></td>

                                          </tr>

                                          @endforeach

                                       </tbody>

                                    </table>

                                 </div>

                                 <div class="d-flex tbl-highlight">

                                    <div class="mr-auto bd-highlight">

                                       <nav aria-label="Page navigation example">

                                          <ul class="pagination">

                                             <li class="page-item reld">

                                                <a class="page-link" href="#">

                                                <i class="fas fa-sync"></i>                                        

                                                </a>

                                             </li> 

                                              {{ $data->links() }}

                                             

                                          </ul>

                                       </nav>

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

          @include('admin.include.footer')

      </div>

   </div>

   @include('admin.include.bottom')

</body>

@endsection