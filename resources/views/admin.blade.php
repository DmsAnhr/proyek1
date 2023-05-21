<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Ciliwung Camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('assets/admin/images/favicon.ic')}}">

    <link rel="stylesheet" href="{{asset ('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}"/>
    <link rel="stylesheet" href="{{asset ('assets/admin/plugins/lightpick/lightpick.css" ')}}" />

    <!-- App css -->
    <link rel="stylesheet" type="text/css"  href="{{asset ('assets/admin/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset ('assets/admin/css/jquery-ui.min.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{asset ('assets/admin/css/icons.min.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{asset ('assets/admin/css/metisMenu.min.css')}}"/>
    <link rel="stylesheet" type="text/css"  href="{{asset ('assets/admin/css/app.min.css')}}"/>

</head>

<body>

    @include('admin.template.topbar')

    @include('admin.template.sidebar')
    
	@yield('content')
	
	@include('admin.template.footer')


    <!-- jQuery  -->
    <script src="{{asset ('assets/admin/js/jquery.min.js')}}"></script>
    <script src="{{asset ('assets/admin/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset ('assets/admin/js/metismenu.min.js')}}"></script>
    <script src="{{asset ('assets/admin/js/waves.js')}}"></script>
    <script src="{{asset ('assets/admin/js/feather.min.js')}}"></script>
    <script src="{{asset ('assets/admin/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset ('assets/admin/js/jquery-ui.min.js')}}"></script>

    <script src="{{asset ('assets/admin/plugins/moment/moment.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/chartjs/chart.min.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/chartjs/roundedBar.min.js')}}"></script>
    <script src="{{asset ('assets/admin/plugins/lightpick/lightpick.js')}}"></script>
    <script src="{{asset ('assets/admin/pages/jquery.sales_dashboard.init.js')}}"></script>


    <!-- App js -->
    <script src="{{asset ('assets/admin/js/app.js')}}"></script>

</body>

</html>