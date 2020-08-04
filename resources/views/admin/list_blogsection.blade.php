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
                        <div class="cus_title col-md-8">List Blog Section</div>
                        <div class="options col-md-4 d-flex justify-content-end">
                           <a href="{{ url('admin/addblogsection')}}" class="btn btn-primary">
                           <i class="fa fa-plus"></i>
                           <span>Add new</span>
                           </a>              
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
                                          </ul>
                                       </nav>
                                    </div>
                                 </div>
                                 <div class="table-responsive">
                                    <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                       <thead class="t-grid-header">
                                          <tr>
                                             <th class="t-header" scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>
                                             <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Section Title</span></th>
                                             </th>
                                             <th class="t-header" scope="col" style="text-align:center"><span class="t-link">Section Status</span>                        
                                             </th>
                                             <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Created Date</span></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($data as $row)
                                          <tr>
                                             <td style="text-align:center">
                                                <input type="checkbox" name="checkedRecords" value="{{ $row->id }}" class="checkboxGroups">
                                             </td>
                                             <td style="text-align:center"><a href="{{ url('admin/blogsection/edit', $row->id )}}">{{ $row->blogsection_title }}</a></td>
                                             @if($row->blogsection_status =='1')
                                             <td style="text-align:center">Active</td>
                                             @else
                                             <td style="text-align:center">Inactive</td>
                                             @endif
                                             <td align="center">{{ $row->created_at }}</td>
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