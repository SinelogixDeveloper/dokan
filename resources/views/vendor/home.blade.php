@extends('vendor.layouts.master')

@section('content')
@include('vendor.include.top')
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
          <div class="card">
            <div class="cph">

              <div id="lockalertmessage">
              <div class="alert alert-warning" style="background-color: #ebb314 !important;" role="alert">
                <strong>Warning!  </strong> Your Account is locked , upload your business details for Unlocked !!.
              </div>
            </div>

              <div class="section-header">
                <div class="title">
                  <i class="far fa-chart-bar"></i>
                  Store Statistics
                </div>
              </div>

              <div class="cus_dashboard">


                <div class="row">
                  <div class="col-lg-12">



                    <div class="row">
                      <div class="col-xl-2 col-md-12">
                        <h1 class="stats-today-title display-4 m-0">Today</h1>
                      </div>
                      <div class="col-xl-10 col-md-12">
                        <div class="row dashboard-top-card">
                          <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                                    <span class="h2 font-weight-bold mb-0">QAR 3000.00</span>
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                     <i class="fas fa-clock"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                  <span class="text-nowrap">Since last month</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Processing</h5>
                                    <span class="h2 font-weight-bold mb-0">QAR 200.00</span>
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                      <i class="ni ni-chart-pie-35"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                  <span class="text-nowrap">Since last month</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Complete</h5>
                                    <span class="h2 font-weight-bold mb-0">QAR 40000.00</span>
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                      <i class="fas fa-check"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                  <span class="text-nowrap">Since last month</span>
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-3 col-md-6">
                            <div class="card card-stats">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Cancelled</h5>
                                    <span class="h2 font-weight-bold mb-0">QAR 0.00</span>
                                  </div>
                                  <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                                      <i class="fas fa-window-close"></i>
                                    </div>
                                  </div>
                                </div>
                                <p class="mt-3 mb-0 text-sm">
                                  <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                  <span class="text-nowrap">Since last month</span>
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>



                    <!-- <div class="stats-today row mb-4">
                      <div class="col">
                        <h1 class="stats-today-title display-4 m-0">Today</h1>
                      </div>
                      <div class="col-auto stats-today-item ml-auto">
                        <div class="stats-today-item-label">Pending</div>
                        <div class="stats-today-item-value">Rs 3000.00</div>
                      </div>
                      <div class="col-auto stats-today-item">
                        <div class="stats-today-item-label">Processing</div>
                        <div class="stats-today-item-value">Rs 200.00</div>
                      </div>
                      <div class="col-auto stats-today-item">
                        <div class="stats-today-item-label">Complete</div>
                        <div class="stats-today-item-value">Rs 40000.00</div>
                      </div>
                      <div class="col-auto stats-today-item mrt4">
                        <div class="stats-today-item-label">Cancelled</div>
                        <div class="stats-today-item-value">Rs 0.00</div>
                      </div>
                    </div> -->
                    
                    
                    
                    
                    
                    <div class="row">
        <div class="col-xl-8">
          <div class="card bg-default">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-light text-uppercase ls-1 mb-1">Overview</h6>
                  <h5 class="h3 text-white mb-0">Sales value</h5>
                </div>
                <div class="col">
                  <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                      </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales-dark" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                      <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Week</span>
                        <span class="d-md-none">W</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales-dark" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                  <h5 class="h3 mb-0">Total orders</h5>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Chart -->
              <div class="chart">
                <canvas id="chart-bars" class="chart-canvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
                    
                    
                    
                    
              <!--      
                    <div class="card shadow-sm mb-4">
                      <h6 class="card-header font-weight-medium border-bottom-0">
                        <i class="fa fa-signal pr-2"></i>
                        Order totals
                      </h6>

                      <div class="table-responsive">
                        <table class="table table-striped m-0">
                          <thead>
                            <tr>
                              <th>Order Status</th>
                              <th>This Week</th>
                              <th>This Month</th>
                              <th>This Year</th>
                              <th>All time</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <a href="#">Pending</a>
                              </td>
                              <td>Rs2,799.00</td>
                              <td>Rs2,799.00</td>
                              <td>Rs2,799.00</td>
                              <td>Rs2,799.00</td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#">Processing</a>
                              </td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#">Complete</a>
                              </td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                            </tr>
                            <tr>
                              <td>
                                <a href="#">Cancelled</a>
                              </td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                              <td>Rs0.00</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>-->

                    <div class="row">
                      <div class="col-xl-6">
                        <div class="card shadow-sm mb-4">
                          <h6 class="card-header font-weight-medium border-bottom-0">
                            <i class="fa fa-star pr-2"></i>
                            Bestsellers by quantity
                          </h6>

                          <div class="table-responsive">
                            <table class="table table-striped m-0">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Total quantity</th>
                                  <th>Total amount (excl tax)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <span class="badge badge-info mr-1">Bundle</span><a href="#"
                                      title="Ultimate Apple Pro">Ultimate Apple Pro</a>
                                  </td>
                                  <td>1</td>
                                  <td>Rs2,799.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                      </div>
                      <div class="col-xl-6">
                        <div class="card shadow-sm mb-4">
                          <h6 class="card-header font-weight-medium border-bottom-0">
                            <i class="fa fa-star pr-2"></i>
                            Bestsellers by amount
                          </h6>

                          <div class="table-responsive">
                            <table class="table table-striped m-0">
                              <thead>
                                <tr>
                                  <th>Name</th>
                                  <th>Total quantity</th>
                                  <th>Total amount (excl tax)</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <span class="badge badge-info mr-1">Bundle</span><a href="#"
                                      title="Ultimate Apple Pro">Ultimate Apple Pro</a>
                                  </td>
                                  <td>1</td>
                                  <td>Rs2,799.00</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>

                      </div>
                    </div>


                    <div class="row">
                      <div class="col-xl-6">
                        <div class="card shadow-sm mb-4">
                          <h6 class="card-header font-weight-medium border-bottom-0">
                            <i class="fa fa-users pr-2"></i>
                            Registered customers
                          </h6>

                          <div class="table-responsive">
                            <table class="table table-striped m-0">
                              <thead>
                                <tr>
                                  <th>Period</th>
                                  <th>Count</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>In the last 7 days</td>
                                  <td>0</td>
                                </tr>
                                <tr>
                                  <td>In the last 14 days</td>
                                  <td>0</td>
                                </tr>
                                <tr>
                                  <td>In the last month</td>
                                  <td>0</td>
                                </tr>
                                <tr>
                                  <td>In the last year</td>
                                  <td>1</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>


                      </div>
                      <div class="col-xl-6">
                        <div class="card shadow-sm mb-4">
                          <h6 class="card-header font-weight-medium border-bottom-0">
                            <i class="fa fa-signal pr-2"></i>
                            Incomplete orders
                          </h6>

                          <div class="table-responsive">
                            <table class="table table-striped m-0">
                              <thead>
                                <tr>
                                  <th>Item</th>
                                  <th>Total</th>
                                  <th>Count</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <a href="#">Total unpaid orders (pending payment
                                      status)</a>
                                  </td>
                                  <td>Rs2,799.00</td>
                                  <td>1</td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="#">Total not yet shipped orders</a>
                                  </td>
                                  <td>Rs2,799.00</td>
                                  <td>1</td>
                                </tr>
                                <tr>
                                  <td>
                                    <a href="#">Total incomplete orders (pending order
                                      status)</a>
                                  </td>
                                  <td>Rs2,799.00</td>
                                  <td>1</td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                  <td>&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
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
@include('vendor.include.bottom')
</body>
@endsection
