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
                           <i class="fa fa-sitemap"></i> List Notification
                           <div class="btn-group ml-2" style="vertical-align: text-top">
                              <a class="btn btn-outline-secondary btn-sm tooltip-toggle active" style="cursor:default" href="javascript:void(0)" data-original-title="" title="">
                              <i class="fa fa-bars"></i>
                              </a>
                              <a class="btn btn-outline-secondary btn-sm tooltip-toggle" href="" title="" data-original-title="switch to tree view">
                              <i class="fa fa-sitemap"></i>
                              </a>
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
                                             <th scope="col"><span class="t-link">Sr.No</span></th>
                                             <th scope="col"><span class="t-link">Notification Msg</span></th>
                                             <th scope="col"><span class="t-link">Admin Msg</span></th>
                                             <th class="t-header" scope="col" style="text-align:center;"><span class="t-link">Read</span></th>
                                             <th class="t-header" scope="col"><span class="t-link">&nbsp;</span></th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?php $number = 1; ?>
                                          @foreach($data as $row)
                                          <tr>
                                             <td>{{ $number }}</td>
                                             @if($row->vendor_not_status =='0')
                                             <td style="color:red;"><a href="{{ url('vendor/product/edit', $row->product_id )}}" >{{ $row->vendor_not_msg }}</a></td>
                                             @else
                                             <td style="background-color: white;"><a href="{{ url('vendor/product/edit', $row->product_id )}}" >{{ $row->vendor_not_msg }}</a></td>
                                             @endif
                                             @if($row->admin_comment =='')
                                             <td >------</td>
                                              @else
                                             <td>{{ $row->admin_comment }}</td>
                                             @endif
                                             <td align="center"><a href="{{ url('vendor/notification/read', $row->id )}}">Read</a></td>
                                             <td class="t-last"><a href="{{ url('vendor/notification/remove', $row->id )}}"  class="t-button t-grid-delete delete">REMOVE</a></td>
                                             <?php $number++; ?>
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
          @include('vendor.include.footer')
      </div>
   </div>
   @include('vendor.include.bottom')
</body>
@endsection