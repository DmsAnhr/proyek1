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
    <link rel="shortcut icon" href="{{ asset('assets/admin/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/lightpick/lightpick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/filter/magnific-popup.css') }}" />

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.min.css') }}" />

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.css') }}" />

    <!-- X-editable css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/plugins/x-editable/css/bootstrap-editable.css') }}" />

    <!-- Responsive datatable examples -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.css') }}" />

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/icons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/metisMenu.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/app.min.css') }}" />

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
    <script type="text/javascript">
    //  var token = $('meta[name="csrf-token"]').attr('content');
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': token
    //         }
    //     });
    //     console.log(token); 
    </script>

    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chartjs/roundedBar.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/lightpick/lightpick.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/jquery.sales_dashboard.init.js') }}"></script>

    <script src="{{ asset('assets/admin/plugins/filter/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/filter/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/filter/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/admin/pages/jquery.gallery.init.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Buttons examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets/admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

    <!-- XEditable Plugin -->
    <script src="{{ asset('assets/admin/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/x-editable/js/bootstrap-editable.min.js') }}"></script>


    <!-- Plugins js -->
    <script src="{{ asset('assets/admin/plugins/select2/select2.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/itemJs.js') }}"></script>
    <script src="{{ asset('assets/service.js') }}"></script>
</body>

</html>
