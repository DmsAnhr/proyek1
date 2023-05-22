<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
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
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/bootstrap.custom.min.css')}}">
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/style.css')}}">

    @stack('css')

    <!-- YOUR CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset ('assets/userNew/css/custom.css')}}">

</head>

<body>
	
	<div id="page">
        @include('rental.template.header')

        @yield('content')
		
        @include('rental.template.footer')
        
	</div>

	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset ('assets/userNew/js/common_scripts.min.js')}}"></script>
    <script src="{{asset ('assets/userNew/js/main.js')}}"></script>
	
    @stack('js')

</body>
</html>