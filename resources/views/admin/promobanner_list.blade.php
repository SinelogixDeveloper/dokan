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
                              <div class="cus_title col-md-8">List Promo Banner</div>
                              <div class="options col-md-4 d-flex justify-content-end">
                                   <a href="{{ url('admin/addpromobanner')}}" class="btn btn-primary">
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
                              <!-- <div class="bd-highlight"><div class="t-status-text">Displaying items 1 - 25 of 173</div></div> -->
                            </div>

                              <div class="table-responsive">
                               
                                        <table cellspacing="0" class="table cus_tbl table-striped m-0">                                        
                                         
                                        <thead class="t-grid-header">
                                            <tr>
                                                <th class="t-header" scope="col" style="text-align:center"><span class="t-link"><input id="mastercheckbox" type="checkbox"></span></th>
                                                <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Banner Images</span></th>
                                                <th class="t-header" scope="col"><span class="t-link">Banner Title</span>
                                                 
                                                </th>
                                                <th class="t-header" scope="col"><span class="t-link">Banner Discription</span>                                                 
                                                </th>
                                                <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Banner URL</span></th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($data as $row)
                                            <tr>
                                                <td style="text-align:center">
                                                    <input type="checkbox" name="checkedRecords" value="{{ $row->id }}" class="checkboxGroups">
                                                </td>
                                                <td style="text-align:center">
                                                   <div class="zoomable-thumb-container"><img alt="{{$row->id}}" src="{{ URL::to('/dokan/public') }}/promo_banner_images/{{ $row->promobanner_images }}" class="zoomable-thumb" style="position: relative;"></div>
                                                </td>
                                                <td><a href="{{ url('admin/promobanner/edit', $row->id )}}">{{ $row->promobanner_title }}</a></td>
                                                <td>{{ $row->promobanner_discription }}</td>
                                                <td align="center">{{ $row->promobanner_url }}</td>
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
                                  </ul>
                                </nav>
                                </div>
                              <!-- <div class="bd-highlight"><div class="t-status-text">Displaying items 1 - 25 of 173</div></div> -->
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