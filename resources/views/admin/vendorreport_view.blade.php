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
               <div class="row section-header justify-content-between">
                  <div class="cus_title col-md-2">         
                     <i class="far fa-chart-bar"></i>Orders        
                  </div>
                  <div class="options float-right">
                     <!-- <div class="input-group d-inline-flex mr-3" style="width: 400px">
                        <input class="form-control" id="GoDirectlyToNumber" name="GoDirectlyToNumber" placeholder="Find by order id" type="text" value="">
                        <div class="input-group-append">
                           <button type="submit" class="btn btn-secondary p_srch" id="go-to-order-by-number" name="go-to-order-by-number" value="go-to-order-by-number" title="Go directly to order #">
                           <i class="fa fa-search"></i>
                           </button>
                           <button type="button" class="btn btn-outline-secondary btn-toggle-filter" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">                                      <i class="fa fa-filter"></i>
                           <span>Filter</span>
                           <i class="fa fa-angle-double-down"></i>
                           </button>
                        </div>
                     </div> -->
                     <!-- <div class="dropdown dropdown-menu-right mx-1">
                        <a class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#">
                        PDF Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a href="javascript:void(0)" class="pdf-export-button dropdown-item">
                           <i class="far fa-fw fa-file-pdf"></i>&nbsp;Export to PDF (selected)
                           </a>
                           <a href="javascript:void(0)" class="pdf-export-button dropdown-item">
                           <i class="far fa-fw fa-file-pdf"></i>&nbsp;Export to PDF (all)
                           </a>
                        </div>
                     </div> -->
                     <!-- <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        OpenTrans Export
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a href="javascript:void(0)" class="dropdown-item opentrans-export-button">
                           <i class="fa fa-fw fa-code"></i>
                           <span>Export all orders in OpenTrans format</span>
                           </a>
                           <a href="javascript:void(0)" class="dropdown-item opentrans-export-button">
                           <i class="fa fa-fw fa-code"></i>
                           <span>Export selected orders in OpenTrans format</span>
                           </a>
                        </div>
                     </div> -->
                     <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle mr-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Export
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                           <!-- <a href="javascript:void(0)" class="dropdown-item export-data-button">
                           <i class="fa fa-fw fa-code"></i>
                           <span>Export selected to XML</span>
                           </a>
                           <a href="javascript:void(0)" class="dropdown-item export-data-button">
                           <i class="far fa-fw fa-file-alt"></i>
                           <span>Export selected to CSV</span>
                           </a>
                           <div class="dropdown-divider"></div> -->
                           <a href="{{ url('admin/vendor_report/excelexport',$seg_id)}}" class="dropdown-item export-data-button">
                           <i class="fa fa-fw fa-code"></i>
                           <span>Export all to XML</span>
                           </a>
                           <a href="{{ url('admin/vendor_report/csvexport',$seg_id)}}" class="dropdown-item export-data-button">
                           <i class="far fa-fw fa-file-alt"></i>
                           <span>Export all to CSV</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="collapse" id="collapseExample">
                  <form action="{{ url('/admin/order/filterbystatus')}}" accept-charset="utf-8" method="post">
                     {{ csrf_field() }}
                     <div class="row mt-3 grid-filter">
                        <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                           <div class="ctl-label">
                              <label for="SearchStoreId">Orders Status</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a specific Product." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                           </div>
                           <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field 'Store' must be a number." id="SearchStoreId" name="order_status" tabindex="-1" aria-hidden="true">
                              <option value="all">All</option>
                              <option value="processing">Order-Processing</option>
                              <option value="inprogress">Order-Inprogress</option>
                              <option value="shippment">Order-ReadytoShip</option>
                              <option value="complete">Order-Complete</option>
                           </select>
                           <i class="fas fa-caret-down sel_dwn"></i>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                           <div class="ctl-label">
                              <label>&nbsp;</label>
                           </div>
                           <button type="submit" class="btn btn-secondary btn-block fltrIn_btn ">
                           <span>Apply filter</span>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="cus_dashboard">
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
                           <div class="table-responsive tbl_outer">
                              <table cellspacing="0" class="table cus_tbl m-0">
                                 <thead class="t-grid-header">
                                    <tr>
                                       <th class="t-header" scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>
                                       <th class="t-header" scope="col"><span class="t-link">OrderRefrenceId</span></th>
                                       <th class="t-header" scope="col"><span class="t-link">Customer</span></th>
                                       <!-- <th class="t-header" scope="col"><span class="t-link">Shipment</span></th> -->
                                       <th class="t-header" scope="col"><span class="t-link">Order Date</span></th>
                                       <th class="t-header" scope="col"><span class="t-link">Order status</span></th>
                                       <!-- <th class="t-header" scope="col" style="text-align:right;"><span class="t-link">Order total</span></th> -->
                                    </tr>
                                 </thead>
                                 <!-- <tfoot>
                                    <tr class="bg_gry">
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td>
                                          <div class="pr-2">
                                             <div class="font-weight-medium mb-2"><strong>Summary:</strong></div>
                                             <div>Profit: <span id="aggregator-profit-block" class="float-right">23,33 QAR</span></div>
                                             <div>Tax: <span id="aggregator-tax-block" class="float-right">8,67 QAR</span></div>
                                             <div>Total: <span id="aggregator-total-block" class="float-right">52,00 QAR</span></div>
                                          </div>
                                       </td>
                                    </tr>
                                 </tfoot> -->
                                 <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($data as $row)
                                    <tr>
                                       <td style="text-align:center">
                                          <input type="checkbox" name="checkedRecords" value="{{ $row->id }}" class="checkboxGroups">
                                       </td>
                                       <td><a href="{{ url('admin/vendor_report/details_view', $row->id.'/'.$seg_id )}}">{{ $row->referanceid }}</a></td>
                                       <td>
                                          <div>{{ $row->name }}</div>
                                       </td>
                                       <!-- <td>
                                          <div>
                                             <i class="fa fa-fw fa-circle text-danger" title="Not yet shipped"></i> <span>Musterweg 1, 12345 Musterstadt, DE</span>
                                             <div class="muted">via Abholung</div>
                                          </div>
                                       </td> -->
                                       <td>
                                          <div>{{ $row->created_at }}</div>
                                       </td>
                                       <td><span class="fw-600">{{ $row->order_status }}</span></td>
                                       <!-- <td style="text-align:right;" class="t-last">
                                          <div class="pr-2"><big style="font-weight:600">{{ $row->total_price }} QAR</big> <i class="fa fa-fw fa-circle text-danger" title="Pending"></i></div>
                                       </td> -->
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
   <!-- Footer -->
   @include('admin.include.footer')
</div>
   </div>
   @include('admin.include.bottom')
</body>
@endsection