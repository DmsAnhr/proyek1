<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ciliwung Camp</title>
    <!-- =================== META =================== -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset ('assets/user/img/new.png') }}">
    <!-- =================== STYLE =================== -->
    <link rel="stylesheet" href="{{asset ('assets/user/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/styles.css') }}">
    <link rel="stylesheet" href="{{asset ('assets/user/css/custom.css') }}">
</head>

<body id="home" class="inner-scroll">


    <!-- =============== CHART START =============== -->
    <div class="nav-chart">

    </div>
    <!-- =============== CHART END =============== -->
	
    <!--================ PRELOADER ================-->
    <div class="preloader-cover">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--============== PRELOADER END ==============-->

    @include('user.template.header')
    
	@yield('user')
	
	@include('user.template.footer')

    <!-- ===================== TO TOP =====================-->
    <a class="to-top" href="#home">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </a>
    <!-- =================== TO TOP END ===================-->

    <!--==================== SCRIPT	====================-->
    <script src="{{asset ('assets/user/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset ('assets/user/js/slick.min.js')}}"></script>
    <script src="{{asset ('assets/user/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset ('assets/user/js/wow.js')}}"></script>
    <script src="{{asset ('assets/user/js/lazyload.min.js')}}"></script>
    <script src="{{asset ('assets/user/js/scripts.js')}}"></script>
    <script src="{{asset ('assets/user/js/custom.js')}}"></script>
</body>

</html>
