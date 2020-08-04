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
      @include('vendor.include.sidebar')
      <!-- Page content -->
      <div class="container-fluid mt--6">
         <div class="row">
            <div class="col-xl-12">
               <div class="card dasbdr_wrapper">
                  <form action="{{ url('/vendor/add_business_upload')}}" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="cph">
                        <div class="row section-header justify-content-between">
                           <div class="cus_title col-md-2">
                              <i class="fa fa-cubes"></i>
                              Business Upload
                           </div>
                           <div class="options float-right">
                              <button type="submit" name="Upload" value="Upload" class="btn btn-warning">
                              <i class="fa fa-check"></i>
                              <span><font style="vertical-align: inherit;">Upload</font></span>
                              </button>
                           </div>
                        </div>
                        <!-- <div class="alert alert-info">
                           <i class="fas fa-info"></i>  Click on the values of the products you want to change within the grid and change them as desired. Accept the changes with a click on [Save changes] or discard them by clicking [Cancel changes]
                           </div> -->
                        <div class="cus_dashboard">
                           <!-- <div class="row mt-3 grid-filter">
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
                              </div> -->
                           <!-- <form action="{{ url('/vendor/add_business_upload')}}" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }} -->
                           <div class="row mt-2">
                              <div class="col-xl-12">
                                 <div class="card shadow-sm mb-4">
                                    <!-- <div class="t-grid-top-btns"><a class="grid-save-changes" href="{{ url('/vendor/add_business_upload')}}"><i class="fa fa-check mr-2"></i>Upload</a></div> -->
                                    <!-- <button type="submit" name="Upload" value="Upload" class="btn btn-warning">
                                       <i class="fa fa-check mr-2"></i>
                                       <span><font style="vertical-align: inherit;">Upload</font></span>
                                       </button> -->
                                    <div class="d-flex tbl-highlight">
                                       <div class="mr-auto bd-highlight">
                                          <nav aria-label="Page navigation example">
                                             <!-- <ul class="pagination">
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
                                                </ul> -->
                                          </nav>
                                       </div>
                                       <!-- <div class="bd-highlight"><div class="t-status-text">Displaying items 1 - 25 of 173</div></div> -->
                                    </div>
                                    <div class="table-responsive tbl_outer">
                                       <table cellspacing="0" class="table cus_tbl table-striped m-0">
                                          <thead class="t-grid-header">
                                             <tr>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Document</a></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Document Summery</a></th>
                                                <th class="t-header" scope="col"><a class="t-link" href="">Select Document File</a></th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td><span class="badge badge-secondary d-none mr-1"></span>Bank Details</td>
                                                <td>Bank Name,Account Number,IBAN Number<a href="{{ URL::to('/auraqatar/public') }}/download.pdf" class="btn btn-large pull-right" target="_blank"><i class="icon-download-alt"> </i> Download Brochure </a></td>
                                                <td><input type="file" name="bank_proof"></td>
                                             </tr>
                                             <!--<tr>-->
                                             <!--   <td><span class="badge badge-secondary d-none mr-1"></span>CR Document</td>-->
                                             <!--   <td>Orginal copy of commercial liacense</td>-->
                                             <!--   <td><input type="file" name="cr_document"></td>-->
                                             <!--</tr>-->
                                             <tr>
                                                <td><span class="badge badge-secondary d-none mr-1"></span>Merchant Agreement</td>
                                                <td>Optional</td>
                                                <td><input type="file" name="merchant_document"></td>
                                             </tr>
                                             <!--<tr>-->
                                             <!--   <td><span class="badge badge-secondary d-none mr-1"></span>Trade License</td>-->
                                             <!--   <td>Upload photograph of Trade Licence</td>-->
                                             <!--   <td><input type="file" name="trade_document"></td>-->
                                             <!--</tr>-->
                                             <!--<tr>-->
                                             <!--   <td><span class="badge badge-secondary d-none mr-1"></span>Computer Card</td>-->
                                             <!--   <td>Upload pdf document of computer card</td>-->
                                             <!--   <td><input type="file" name="computer_document"></td>-->
                                             <!--</tr>-->
                                             <!--<tr>-->
                                             <!--   <td><span class="badge badge-secondary d-none mr-1"></span>Authorized Signatory ID</td>-->
                                             <!--   <td>authorised_document</td>-->
                                             <!--   <td><input type="file" name="authorised_document"></td>-->
                                             <!--</tr>-->
                                          </tbody>
                                       </table>
                                    </div>
                                    <div class="d-flex tbl-highlight">
                                       <div class="mr-auto bd-highlight">
                                          <nav aria-label="Page navigation example">
                                             <!-- <ul class="pagination">
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
                                                </ul> -->
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
            </form>
         </div>
      
   <!-- Footer -->
   @include('vendor.include.footer')
   </div>
   </div>
   @include('vendor.include.bottom')
</body>
@endsection