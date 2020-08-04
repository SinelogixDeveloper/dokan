@extends('vendor.layouts.master')
@section('content')
@include('vendor.include.top')
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
      @include('vendor.include.sidebar')
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row">
            <div class="col-xl-12">
               <div class="card dasbdr_wrapper">
                  <div class="cph">
                     <div class="section-header row">
                        <div class="cus_title col-md-8">
                           <i class="fa fa-sitemap"></i> Manage Brands
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
                           <a href="{{ url('vendor/add-brand')}}" class="btn btn-primary">
                              <i class="fa fa-plus"></i>
                              <span>Add new</span>
                           </a>
                           <!--<div class="btn-group">-->
                           <!--   <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                           <!--   Export-->
                           <!--   </button>-->
                           <!--   <div class="dropdown-menu dropdown-menu-right">-->
                           <!--      <a href="{{ url('vendor/category/excelexport')}}" class="dropdown-item export-data-button" data-url="">-->
                           <!--      <i class="fa fa-fw fa-code"></i>-->
                           <!--      <span>Export selected to XML</span>-->
                           <!--      </a>-->
                           <!--      <a href="{{ url('vendor/category/csvexport')}}" class="dropdown-item export-data-button" data-url="">-->
                           <!--      <i class="far fa-fw fa-file-alt"></i>-->
                           <!--      <span>Export selected to CSV</span>-->
                           <!--      </a>-->
                           <!--      <div class="dropdown-divider"></div>-->
                           <!--      <a href="{{ url('vendor/category/excelexport')}}" class="dropdown-item export-data-button" data-url="">-->
                           <!--      <i class="fa fa-fw fa-code"></i>-->
                           <!--      <span>Export all to XML</span>-->
                           <!--      </a>-->
                           <!--      <a href="{{ url('vendor/category/csvexport')}}" class="dropdown-item export-data-button" data-url="">-->
                           <!--      <i class="far fa-fw fa-file-alt"></i>-->
                           <!--      <span>Export all to CSV</span>-->
                           <!--      </a>-->
                           <!--   </div>-->
                           <!--</div>-->
                        </div>
                     </div>
                     @if ($message = Session::get('success'))
                     <div class="alert alert-success alert-block" style="background-color:cornflowerblue;border-color: cornflowerblue;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                     </div>
                     @endif
                     <div class="cus_dashboard">
                        <!--<form action="{{ url('/admin/category_filter')}}" method="post" >-->
                        <!--   {{ csrf_field() }}-->
                        <!--    <div class="row mt-3 grid-filter">-->
                        <!--   <div class="col-sm-6 col-lg-4 col-xl-3 form-group">-->
                        <!--      <div class="ctl-label">-->
                        <!--         <label for="SearchCategoryName">Category name</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Category" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->
                        <!--      </div>-->
                        <!--      <input class="form-control" id="SearchCategoryName" name="category_name" type="text" value="">-->
                        <!--   </div>-->
                        <!--   <div class="col-sm-6 col-lg-4 col-xl-3 form-group">-->
                        <!--      <div class="ctl-label">-->
                        <!--         <label for="SearchAlias">Alias</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Alias" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->
                        <!--      </div>-->
                        <!--      <input class="form-control" id="SearchAlias" name="alias" type="text" value="">-->
                        <!--   </div>-->
                        <!--<div class="col-sm-6 col-lg-4 col-xl-3 form-group">-->
                        <!--   <div class="ctl-label">-->
                        <!--      <label for="SearchStoreId">Store</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Search by a specific store." data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>-->
                        <!--   </div>-->
                        <!--   <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field 'Store' must be a number." id="SearchStoreId" name="SearchStoreId" tabindex="-1" aria-hidden="true">-->
                        <!--      <option value="">All</option>-->
                        <!--      <option value="1">Demo Shop</option>-->
                        <!--      <option value="2">Demo-Shop 2</option>-->
                        <!--   </select>-->
                        <!--   <i class="fas fa-caret-down sel_dwn"></i>-->
                        <!--</div>-->
                        <!--   <div class="col-sm-6 col-lg-4 col-xl-3 form-group">-->
                        <!--      <div class="ctl-label">-->
                        <!--         <label>&nbsp;</label>-->
                        <!--      </div>-->
                        <!--      <button type="submit" id="btnSearch" value="btnSearch" class="btn btn-secondary btn-block">-->
                        <!--      <span>Apply filter</span>-->
                        <!--      </button>-->
                        <!--   </div>-->
                        <!--</div>-->
                        <!--</form>-->
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
                                             {{ $brands->links() }}
                                          </ul>
                                       </nav>
                                    </div>
                                    <div class="bd-highlight">
                                       <div class="t-status-text">Displaying items 1 - 25 of 173</div>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                       <thead class="t-grid-header">
                                          <tr>
                                             <th scope="col"><span class="t-link">Brand Name</span></th>
                                             <th scope="col"><span class="t-link">Brand Image</span></th>
                                             <th scope="col"><span class="t-link">Status</span></th>
                                             <th scope="col"><span class="t-link">Action</span></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $number = 1; ?>
                                          @foreach($brands as $row)
                                          <tr>
                                             <td>{{ $row->name }}</td>
                                             <td>
                                                <div class="zoomable-thumb-container"><img src="{{ asset('../brand_images/'.$row->image) }}" style="position: relative;"></div>
                                             </td>
                                             @if($row->status == '1')
                                             <td>Active</td>
                                             @else
                                             <td>Deactive</td>
                                             @endif
                                             <td><a href="{{url('/admin/edit-brands').'/'.$row->id}}">Edit</a>| <a id="delete-brand" data-id="{{$row->id}}">Delete</a></td>
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
                                             </li> -->

                                             {{ $brands->links() }}

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
         @include('admin.include.footer')
      </div>
   </div>
   @include('admin.include.bottom')
   <script>
      $(document).ready(function() {
         $(document).on('click', '#delete-brand', function() {
            var brand_id = $(this).attr('data-id');
            if (confirm("Are you sure you want to delete this brand?")) {
               $.ajax({
                  url: '/admin/delete-brand/' + brand_id,
                  method: 'GET',
                  success: function(resp) {
                     if (resp.status == "true") {
                        window.location.href = '/admin/show-brands';
                     }
                  }
               })
            }
         })
      })
   </script>
</body>
@endsection