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
                           <i class="fa fa-sitemap"></i> Manage Categories
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
                           <a href="{{ url('admin/addcategory')}}" class="btn btn-primary">
                           <i class="fa fa-plus"></i>
                           <span>Add new</span>
                           </a>
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
                         <form action="{{ url('/admin/category_filter')}}" method="post" >
                           {{ csrf_field() }}
                        <div class="row mt-3 grid-filter">
                           <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                              <div class="ctl-label">
                                 <label for="SearchCategoryName">Category name</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Category" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                              </div>
                              <input class="form-control" id="SearchCategoryName" name="category_name" type="text" value="">
                           </div>
                           <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                              <div class="ctl-label">
                                 <label for="SearchAlias">Alias</label><a class="hint" href="#" onclick="return false;" tabindex="-1" title="Alias" data-toggle="tooltip" data-placement="left"><i class="fa fa-question-circle"></i></a>
                              </div>
                              <input class="form-control" id="SearchAlias" name="alias" type="text" value="">
                           </div>
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
                           <div class="col-sm-6 col-lg-4 col-xl-3 form-group">
                              <div class="ctl-label">
                                 <label>&nbsp;</label>
                              </div>
                              <button type="submit" id="btnSearch" value="btnSearch" class="btn btn-secondary btn-block">
                              <span>Apply filter</span>
                              </button>
                           </div>
                        </div>
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
                                    <div class="bd-highlight">
                                       <div class="t-status-text">Displaying items 1 - 25 of 173</div>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                       <thead class="t-grid-header">
                                          <tr>
                                             <th scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>
                                             <th scope="col"><span class="t-link">Category</span></th>
                                             <th scope="col"><span class="t-link">Complete name</span></th>
                                             <th scope="col"><span class="t-link">Alias</span></th>
                                             <th scope="col" style="text-align:center;"><span class="t-link">Published</span></th>
                                             <!--<th scope="col" style="text-align:center;"><span class="t-link">Display order</span></th>-->
                                             <!--<th scope="col" style="text-align:center;"><span class="t-link">Limited to stores</span></th>-->
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $number = 1; ?>
                                          @foreach($data as $row)
                                          <tr>
                                             <td style="text-align:center">
                                                <input type="checkbox" name="checkedRecords" value="{{ $row->id }}" class="checkboxGroups">
                                             </td>
                                             <td><a href="{{ url('admin/category/edit', $row->id )}}">{{ $row->category_name }}</a></td>
                                             <td>{{ $row->sub_category_name }}</td>
                                             <td>{{ $row->alias }}</td>
                                             @if($row->cat_status =='1')
                                             <td align="center"><i class="fas fa-check icon-active-true"></i></td>
                                             @else
                                             <td align="center"><i class="fas fa-times icon-active-true"></i></td>
                                             @endif
                                             <!--<td align="center">-100</td>-->
                                             <!--<td align="center" class="t-last"><i class="fas fa-minus icon-active-false"></i></td>-->
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
          @include('admin.include.footer')
      </div>
   </div>
   @include('admin.include.bottom')
</body>
@endsection