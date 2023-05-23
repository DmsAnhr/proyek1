<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ciliwung Camp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset ('assets/user/img/new.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/lightpick/lightpick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/filter/magnific-popup.css') }}" />

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.min.css') }}" />

    @stack('css')

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/icons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/metisMenu.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/app.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/custom.css') }}" />

</head>

<body>

    @include('admin.template.topbar')

    @include('admin.template.sidebar')

    @yield('content')

    @include('admin.template.footer')


    <!-- jQuery  -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
    <script src="{{ asset('assets/admin/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/select2/select2.min.js') }}"></script>

    
    <!-- Plugins js -->
    @stack('js')

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/service.js') }}"></script>

    @stack('jsPage')
</body>

</html>
