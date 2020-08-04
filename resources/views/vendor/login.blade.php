@extends('vendor.layouts.master')

@section('content')
@include('vendor.include.top')
<body>
<div class="main-content" id="panel">        
    <!-- Header -->
    @include('vendor.include.header')
    <!-- Page content -->
          <div class="container-fluid mt--6">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="cph" style="padding-bottom: 70px;">
                  <div class="login-box" style="width: 50%;margin: 0 auto;">
                      <div class="login-logo" style="padding: 10px;width: 30%;margin: 0 auto;">
                        <h2>Vendor <b> Login</h2>
                      </div>
                      
                      <div class="card">
                          @if ($message = Session::get('error'))
                         <div class="alert alert-success alert-block" style="background-color:cornflowerblue;border-color: cornflowerblue;">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                                 <strong>{{ $message }}</strong>
                         </div>
                         @endif
                        <div class="card-body login-card-body">
                          <p class="login-box-msg">Sign in to start your session</p>

                          <form class="form-horizontal" method="POST" action="{{ url('vendor\login') }}">
                          {{ csrf_field() }}
                            <div class="input-group mb-3 form-group{{ $errors->has('email') ? ' has-error' : '' }}" >
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                              <div class="input-group-append">
                                <div class="input-group-text">
                                  <span class="fas fa-lock"></span>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-8">
                                <div class="icheck-primary">
                                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="remember">
                                    Remember Me
                                  </label>
                                </div>
                              </div>
                              <!-- /.col -->
                              <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                              </div>
                              <!-- /.col -->
                            </div>
                          </form>                          
                          <!-- /.social-auth-links -->
                          <div class="row">
                            <p class="mb-1">                            
                                  <a class="btn btn-link" href="{{ url('/vendor/reset/password') }}">I forgot my password</a>
                            </p> 
                          </div>                             
                        </div>
                        <!-- /.login-card-body -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @include('vendor.include.footer')
          </div>
        </div>
      </div>
    </div>
</div>        
@include('vendor.include.bottom')
</body>
@endsection
