@extends('index')

@section('content')
    <!-- ================= PAGE-ERROR ================= -->
	<section class="page-error" style="background-image: url({{asset ('assets/user/img/bg-error.jpg')}});">
		<div class="container">
			<h1 class="name">Oops!</h1>
			<h3>Error message</h3>
			<p>Don't worry let's go Home</p>
			<a href="index.html" class="btn"><span>home</span></a>
		</div>
	</section>
	<!-- =============== PAGE-ERROR END =============== -->    
@endsection
