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
                              <i class="fa fa-cube"></i>
                              List products
                           </div>
                           <div class="options float-right">
                              <!-- <div class="input-group d-inline-flex mr-3" style="width: 350px">
                                 <input class="form-control" id="GoDirectlyToSku" name="GoDirectlyToSku" placeholder="Find by SKU" type="text" value="">
                                 <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary p_srch" id="" name="go-to-product-by-sku" value="go-to-product-by-sku" title="Enter product SKU and click Go.">
                                    <i class="fa fa-search"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-toggle-filter" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    <i class="fa fa-filter"></i>
                                    <span>Filter</span>
                                    <i class="fa fa-angle-double-down"></i>
                                    </button>
                                 </div>
                              </div> -->
                              <!-- <a href="{{ url('admin/addproduct')}}" class="btn btn-primary mtp">
                              <i class="fa fa-plus"></i>
                              <span>Add new</span>
                              </a>
                              <button type="submit" id="delete-selected" class="btn btn-secondary btn-to-danger mtp deleteAll" data-url="{{ url('admin/product/DeleteAll') }}">
                              <i class="far fa-trash-alt"></i>
                              <span>Delete (selected)</span>
                              </button>
                              <div class="btn-group mtp">
                                 <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span>PDF Export</span>
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item export-pdf-button" data-url="">
                                    <i class="far fa-fw fa-file-pdf"></i>
                                    <span>Export selected to PDF</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item export-pdf-button" data-url="">
                                    <i class="far fa-fw fa-file-pdf"></i>
                                    <span>Export all to PDF</span>
                                    </a>
                                 </div>
                              </div> -->
                              <!-- <div class="btn-group lst_btn mtp">
                                 <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 Export
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item export-data-button" data-url="">
                                    <i class="fa fa-fw fa-code"></i>
                                    <span>Export selected to XML</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item export-data-button" data-url="">
                                    <i class="far fa-fw fa-file-alt"></i>
                                    <span>Export selected to CSV</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item export-data-button" data-url="">
                                    <i class="fa fa-fw fa-code"></i>
                                    <span>Export all to XML</span>
                                    </a>
                                    <a href="javascript:void(0)" class="dropdown-item export-data-button" data-url="">
                                    <i class="far fa-fw fa-file-alt"></i>
                                    <span>Export all to CSV</span>
                                    </a>
                                 </div>
                              </div> -->
                           </div>
                        </div>
                        <div class="collapse" id="collapseExample">
                           <div class="row mt-3 grid-filter">
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="form-group ctl-label">
                                    <label for="StartDate">Start date</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                       </div>
                                       <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="form-group  ctl-label">
                                    <label for="StartDate">Start date</label>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                       </div>
                                       <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2020">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="ctl-label">
                                    <label for="SearchStoreId">Customer name</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a specific store." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                 </div>
                                 <input class="form-control" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="ctl-label">
                                    <label for="SearchCategoryName">Billing email address</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="A product name." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                 </div>
                                 <input class="form-control" id="SearchCategoryName" name="SearchCategoryName" type="text" value="">
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="ctl-label">
                                    <label for="SearchStoreId">Product type</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a specific Product." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                 </div>
                                 <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field 'Store' must be a number." id="SearchStoreId" name="SearchStoreId" tabindex="-1" aria-hidden="true">
                                    <option value="">All</option>
                                    <option value="1">Simple product</option>
                                    <option value="2">Simple product</option>
                                 </select>
                                 <i class="fas fa-caret-down sel_dwn"></i>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="ctl-label">
                                    <label for="SearchStoreId">Product type</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a specific store." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                 </div>
                                 <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field 'Store' must be a number." id="SearchStoreId" name="SearchStoreId" tabindex="-1" aria-hidden="true">
                                    <option value="">All</option>
                                    <option value="1">Simple product</option>
                                    <option value="2">Simple product</option>
                                 </select>
                                 <i class="fas fa-caret-down sel_dwn"></i>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                                 <div class="ctl-label">
                                    <label for="SearchStoreId">Category</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a Category" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                                 </div>
                                 <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field 'Store' must be a number." id="SearchStoreId" name="SearchStoreId" tabindex="-1" aria-hidden="true">
                                    <option value="">All</option>
                                    <option value="1">Simple product</option>
                                    <option value="2">Simple product</option>
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
                                       <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                          <thead class="t-grid-header">
                                             <tr>
                                                <th class="t-header" scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>
                                                <th class="t-header" scope="col"><span class="t-link">Picture</span></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Product name</a></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">SKU</a></th>
                                                <th class="t-header" scope="col" style="text-align:right;"><a class="t-link" href="">Price</a></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Stock quantity</a></th>
                                                <!-- <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Limited to stores</a></th> -->
                                                <th class="t-header" scope="col"><a class="t-link" href="">Created By</a></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Created on</a></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Updated on</a></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Published</a></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Approve Status</a></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Best Seller Status</a></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Action For Best Seller</a></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             @foreach($data as $row)
                                             <tr id="tr_{{$row->id}}">
                                                <td style="text-align:center">
                                                   <input type="checkbox" name="checkedRecords" value="{{$row->id}}" data-id="{{$row->id}}" class="checkboxGroups">
                                                </td>
                                                <td>
                                                   <div class="zoomable-thumb-container"><img alt="{{$row->id}}" src="{{ URL::to('/dokan/public') }}/product_images/{{ $row->featured_images }}" class="zoomable-thumb" style="position: relative;"></div>
                                                </td>
                                                <td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ url('admin/product/edit', $row->id )}}">{{ $row->product_name }}</a></td>
                                                <td>{{ $row->product_sku }}</td>
                                                <td style="text-align:right;">{{ $row->product_price }}</td>
                                                <td align="center">{{ $row->product_qty }}</td>
                                                <!-- <td align="center"><i class="fas fa-minus icon-active-false"></i></td> -->
                                                <td>{{ $row->created_by_name }}</td>
                                                <td>{{ $row->created_at }}</td>
                                                <td>{{ $row->updated_at }}</td>

                                                @if($row->product_status =='1')  
                                                <td align="center"><i class="fas fa-check icon-active-true"></i></td>
                                                @else
                                                <td align="center"><i class="fas fa-times icon-active-true"></i></td>
                                                @endif
                                                @if($row->approve_status =='1')
                                                <td align="center"><i class="fas fa-check icon-active-true"></i></td>
                                                @else
                                                <td align="center"><i class="fas fa-times icon-active-true"></i></td>
                                                @endif
                                                @if($row->best_seller =='1')
                                                <td align="center">Yes</td>
                                                @else
                                                <td align="center">No</td>
                                                @endif
                                                <td align="center"><a href="{{ url('/admin/product/new', $row->id )}}">No</a></td>
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
                                                <!-- <li class="page-item">
                                                   <a class="page-link" href="#" aria-label="Previous">
                                                   <span aria-hidden="true">&laquo;</span>
                                                   <span class="sr-only">Previous</span>
                                                   </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                <li class="page-item">
                                                   <a class="page-link" href="#" aria-label="Next">
                                                   <span aria-hidden="true">&raquo;</span>
                                                   <span class="sr-only">Next</span>
                                                   </a>
                                                </li> -->
                                                {{ $data->links() }}
                                             </ul>
                                          </nav>
                                       </div>
                                       <div class="bd-highlight">
                                          <div class="t-status-text">Displaying items 1 - 25 of 173</div>
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
            <footer class="footer pt-0">
               <div class="row align-items-center justify-content-lg-between">
                  <div class="col-lg-6">
                     <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2020 <a href="https://auraqatar.com/" class="font-weight-bold ml-1" target="_blank">Aura Technologies</a>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                           <a href="#" class="nav-link" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="nav-link" target="_blank">Blog</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </footer>
         </div>
   </div>
   @include('admin.include.bottom')
</body>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#mastercheckbox').on('click', function(e) {
         if($(this).is(':checked',true))  
         {
            $(".checkboxGroups").prop('checked', true);  
         } else {  
            $(".checkboxGroups").prop('checked',false);  
         }  
        });

         $('.deleteAll').on('click', function(e) {


            var allVals = [];  
            $(".checkboxGroups:checked").each(function() {  
                allVals.push($(this).attr('data-id'));
            });  


            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  
                if(check == true){  


                    var join_selected_values = allVals.join(","); 
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'DELETE',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data: 'ids='+join_selected_values,
                        success: function (data) {
                            if (data['success']) {
                                $(".checkboxGroups:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                alert(data['success']);
                               location.reload();
                            } else if (data['error']) {
                                alert(data['error']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                  $.each(allVals, function( index, value ) {
                      $('table tr').filter("[data-row-id='" + value + "']").remove();
                  });
                }  
            }  
        });
    
    });
</script>