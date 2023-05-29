<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Ciliwung Camp</title>

    <!-- Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset ('assets/userNew/img/favicon.ico')}}">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset ('assets/userNew/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset ('assets/userNew/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset ('assets/userNew/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset ('assets/userNew/img/apple-touch-icon-144x144-precomposed.png')}}">
	
    <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="{{asset ('assets/userNew/https://fonts.googleapis.com')}}">
	<link rel="preconnect" crossorigin href="{{asset ('assets/userNew/https://fonts.gstatic.com')}}">
	<link rel="stylesheet" href="{{asset ('assets/userNew/https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap')}}">

    <!-- BASE CSS -->
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/style.css')}}">

    @stack('css')

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/custom.css')}}">

</head>

<body>
	@auth
        <div class="d-none" id="userid" data-id="{{ Auth::user()->name }}"></div>
    @endauth
	<div id="page">
        @include('rental.template.header')

        @yield('content')
		
        @include('rental.template.footer')
        
	</div>

	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset ('assets/userNew/js/common_scripts.min.js')}}"></script>
    <script src="{{asset ('assets/userNew/js/main.js')}}"></script>
	
    @auth
        <script>
            function reloadCart() {
                var userId;
                $.ajax({
                    url: '/get-user-id',
                    method: 'GET',
                    success: function(response) {
                        userId = response.user_id;
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
                
                $.ajax({
                    url: '/cartData',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        var totalHarga = 0;
                        var totalBarang = 0;
                        $.each(response, function(index, item) {
                            var html = '<li>';
                                html += '<a href="product-detail-1.html">';
                                    html += '<figure><img src="storage/' + item.barang.foto + '" data-src="storage/' + item.barang.foto + '" alt="' + item.barang.nama + '" width="50" height="50" class=""></figure>';
                                    html += '<strong><span>' + item.barang.nama + '</span>@Rp.' + item.barang.harga + '</strong>';
                                html += '</a>';
                                html += '<a href="#0" class="action" style="padding-top:15px;padding-right:25px;color:black">X'+item.jumlah+'</a>';
                            html += '</li>';
                            $(".cart-dropdown ul").html('');
                            $(".cart-dropdown ul").append(html);
                            totalHarga += (parseInt(item.barang.harga)*parseInt(item.jumlah));
                            totalBarang += parseInt(item.jumlah);
                        });
                        $('.totalHargaCart').text('Rp.'+totalHarga);
                        $('.totalBarangCart').text(totalBarang);
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                    }
                });
            }
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                reloadCart();

                // var userId;
                // $.ajax({
                //     url: '/get-user-id',
                //     method: 'GET',
                //     success: function(response) {
                //         userId = response.user_id;
                //     },
                //     error: function(xhr) {
                //         console.log(xhr.responseText);
                //     }
                // });
                
                // $.ajax({
                //     url: '/cartData',
                //     type: 'GET',
                //     dataType: 'json',
                //     success: function(response) {
                //         var totalHarga = 0;
                //         var totalBarang = 0;
                //         $.each(response, function(index, item) {
                //             var html = '<li>';
                //                 html += '<a href="product-detail-1.html">';
                //                     html += '<figure><img src="storage/' + item.barang.foto + '" data-src="storage/' + item.barang.foto + '" alt="' + item.barang.nama + '" width="50" height="50" class=""></figure>';
                //                     html += '<strong><span>' + item.barang.nama + '</span>@Rp.' + item.barang.harga + '</strong>';
                //                 html += '</a>';
                //                 html += '<a href="#0" class="action" style="padding-top:15px;padding-right:25px;color:black">X'+item.jumlah+'</a>';
                //             html += '</li>';
                //             $(".cart-dropdown ul").append(html);
                //             totalHarga += (parseInt(item.barang.harga)*parseInt(item.jumlah));
                //             totalBarang += parseInt(item.jumlah);
                //         });
                //         $('.totalHargaCart').text('Rp.'+totalHarga);
                //         $('.totalBarangCart').text(totalBarang);
                //     },
                //     error: function(xhr, status, error) {
                //         console.log(xhr.responseText);
                //     }
                // });
            });
        </script>
    @endauth
    @stack('js')
</body>
</html>