<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset ('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset ('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset ('assets/admin/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="{{ asset('assets/user/img/new.png') }}" style="opacity: .7" width="200px">
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ url ('/login') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user" style="color: #ffd910;"></span>
            </div>
          </div>
          @error('username')
            <span class="error invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control @error('password') is-invalid @enderror required" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock" style="color: #ffd910;"></span>
            </div>
          </div>
          @error('password')
              <span class="error invalid-feedback" role="alert">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <button class="btn btn-warning btn-block"><b>Login</b></button>
        </div>
      </form>

      <p class="mb-0">
        <a href="{{ url('/register') }}" class="text-center" >Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Crovex - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" >

        <!-- App css -->
        <link href="{{asset ('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('assets/admin/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset ('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('assets/admin/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset ('assets/admin/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="../dashboard/analytics-index.html" class="logo logo-admin"><img src="{{asset ('assets/admin/images/logo-sm.png')}}" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5">Let's Get Started Crovex</h4>
                                        <p class="text-muted mb-0">Sign in to continue to Crovex.</p>  
                                    </div> <!--end auth-logo-text-->  
    
                                    
                                    <form class="form-horizontal auth-form my-4" action="{{ url ('/login') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>                                                                                                              
                                                <input type="text"  class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Enter username">
                                                @error('username')
                                                  <span class="error invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror    
                                            </div>                                    
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label for="password">Password</label>                                            
                                            <div class="input-group mb-3"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i> 
                                                </span>                                                       
                                                <input type="password" class="form-control @error('password') is-invalid @enderror required" name="password" placeholder="Enter password">
                                                @error('password')
                                                  <span class="error invalid-feedback" role="alert">{{ $message }}</span>
                                                @enderror    
                                            </div>                               
                                        </div><!--end form-group--> 
            
                                        <div class="form-group row mt-4">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-switch switch-success">
                                                    <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                    <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                                </div>
                                            </div> 
                                            <div class="col-sm-6 text-right">
                                                <a href="auth-recover-pw.html" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                            </div>
                                        </div><!--end form-group--> 
            
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" type="button">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    <p class="">Don't have an account ?  <a href="{{ url('/register') }}" class="text-primary ml-2">Free Resister</a></p>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="account-social text-center mt-4">
                            <h6 class="my-4">Or Login With</h6>
                            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul>
                        </div><!--end account-social-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="{{asset ('assets/admin/js/jquery.min.js')}}"></script>
        <script src="{{asset ('assets/admin/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset ('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('assets/admin/js/metismenu.min.js')}}"></script>
        <script src="{{asset ('assets/admin/js/waves.js')}}"></script>
        <script src="{{asset ('assets/admin/js/feather.min.js')}}"></script>
        <script src="{{asset ('assets/admin/js/jquery.slimscroll.min.js')}}"></script>        

        <!-- App js -->
        <script src="{{asset ('assets/admin/js/app.js')}}"></script>
        
    </body>

</html> --}}