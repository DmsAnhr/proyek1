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
    <link rel="shortcut icon" href="{{ asset('assets/user/img/new.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jvectormap/jquery-jvectormap-2.0.2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/lightpick/lightpick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/filter/magnific-popup.css') }}" />

    <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/select2/select2.min.css') }}" />

    <!-- Sweet Alert -->
    <link href="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/admin/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">

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

    @include('user.template.topbar')

    {{-- @include('user.template.sidebar') --}}

    @yield('content')

    @include('user.template.footer')


    <!-- jQuery  -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/waves.js') }}"></script>
    <script src="{{ asset('assets/admin/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/select2/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>

    <script type="text/javascript">
        function getCurrentTimestamp() {
            var currentDate = new Date();
            var year = currentDate.getFullYear();
            var month = ('0' + (currentDate.getMonth() + 1)).slice(-2);
            var day = ('0' + currentDate.getDate()).slice(-2);
            var hours = ('0' + currentDate.getHours()).slice(-2);
            var minutes = ('0' + currentDate.getMinutes()).slice(-2);
            var seconds = ('0' + currentDate.getSeconds()).slice(-2);

            var timestamp = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
            return timestamp;
        }

        function formatRupiah(angka, prefix) {
            var angkas = angka.toString();
            var number_string = angkas.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        var userIdAll;
        $.ajax({
            url: '/get-user-id',
            method: 'GET',
            success: function(response) {
                userIdAll = response.user_id;
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
        $.ajax({
            url: '/user-detail/',
            method: 'GET',
            success: function(data) {
                $('.top-bar-name').html(data.username +
                    '<i class="mdi mdi-chevron-down"></i>');
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    </script>

    <!-- Plugins js -->
    @stack('js')

    <!-- App js -->
    <script src="{{ asset('assets/admin/js/app.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/service.js') }}"></script>

    @stack('jsPage')
</body>

</html>
