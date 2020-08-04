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
                           <i class="fa fa-cubes"></i>
                           Bulk edit products
                        </div>
                        <div class="options float-right">
                        </div>
                     </div>
                     <div class="alert alert-info">
                        <i class="fas fa-info"></i>  Click on the values of the products you want to change within the grid and change them as desired. Accept the changes with a click on [Save changes] or discard them by clicking [Cancel changes]
                     </div>
                     <div class="cus_dashboard">
                        <div class="row mt-3 grid-filter">
                           <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                              <div class="ctl-label">
                                 <label for="SearchCategoryName">Product name</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="A product name." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
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
                                 <label for="SearchStoreId">Manufacturer</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a Manufacturer" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
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
                              <button type="submit" id="btnSearch" value="btnSearch" class="btn btn-secondary btn-block">
                              <span>Apply filter</span>
                              </button>
                           </div>
                        </div>
                        <div class="row mt-2">
                           <div class="col-xl-12">
                              <div class="card shadow-sm mb-4">
                                 <div class="t-grid-top-btns"><a class="grid-save-changes" href="#"><i class="fa fa-check mr-2"></i>Save changes</a><a class="grid-cancel-changes" href="#">Cancel changes</a></div>
                                 <div class="d-flex tbl-highlight">
                                    <div class="mr-auto bd-highlight">
                                       <nav aria-label="Page navigation example">
                                          <ul class="pagination">
                                             <li class="page-item reld">
                                                <a class="page-link" href="#">
                                                <i class="fas fa-sync"></i>                                        
                                                </a>
                                             </li>
                                             <li class="page-item">
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
                                             </li>
                                          </ul>
                                       </nav>
                                    </div>
                                    <div class="bd-highlight">
                                       <div class="t-status-text">Displaying items 1 - 25 of 173</div>
                                    </div>
                                 </div>
                                 <div class="table-responsive tbl_outer">
                                    <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                       <thead class="t-grid-header">
                                          <tr>
                                             <th class="t-header" scope="col"><a class="t-link" href="">Name</a></th>
                                             <th class="t-header" scope="col"><a class="t-link" href="">SKU</a></th>
                                             <th class="t-header" scope="col"><a class="t-link" href="">Price</a></th>
                                             <th class="t-header" scope="col"><a class="t-link" href="">Old price</a></th>
                                             <th class="t-header" scope="col"><a class="t-link" href="">Manage inventory</a></th>
                                             <th class="t-header" scope="col"><a class="t-link" href="">Stock qty</a></th>
                                             <th class="t-header" scope="col" style="text-align:center;"><a class="t-link" href="">Published</a></th>
                                             <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Edit</span></th>
                                             <th class="t-header" scope="col"><span class="t-link">&nbsp;</span></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                           @foreach($data as $row)
                                          <tr>
                                             <td><span class="badge badge-secondary d-none mr-1"></span><a href="{{ url('admin/product/edit', $row->id )}}">{{ $row->product_name }}</a></td>
                                             <td></td>
                                             <td>{{ $row->product_price }}</td>
                                             <td>0.00</td>
                                             <td nowrap="nowrap">Track inventory</td>
                                             <td>{{ $row->product_qty }}</td>
                                             <td align="center"><i class="fas fa-check icon-active-true"></i></td>
                                             <td align="center"><a href="{{ url('admin/product/edit', $row->id )}}">Edit</a></td>
                                             <td class="t-last"><a href="" data-url="{{ url('admin/product/bulkDelete') }}" data-id="{{$row->id}}" class="t-button t-grid-delete delete">Delete</a></td>
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
                                             <li class="page-item">
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
                                             </li>
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
         $('.delete').on('click', function(e) {
            var allVals = $(this).attr('data-id');  
            if(allVals.length <=0)  
            {  
                alert("Please select row.");  
            }  else {  
                var check = confirm("Are you sure you want to delete this row?");  
                if(check == true){  
                    var join_selected_values = allVals; 
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
<script type="text/javascript">
$(document).ready(function() {
    
  $("td").on("click", function() {
    var $td = $(this);
    var $editdiv = $('<div class="editdiv"><input type="text" class="input"><button class="submit"><i class="fa fa-check"></i></button></div>');
    
    if (!$td.find(".input").length) {
      var tdText = $td.text();
      $td.html($editdiv);
      $editdiv.find('.input').val(tdText).focus();
    }
  });
  
  $(document).on('click', '.submit', function(event) {
    var inputval = $(this).prev(".input").val();
    $(this).closest(".editdiv").parent("td").html(inputval);
  });
});
</script>