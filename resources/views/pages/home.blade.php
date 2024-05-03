<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Site NHK networking</title>

       
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css')}}"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="{{ asset('home/css/slick.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('home/css/slick-theme.css')}}"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="{{ asset('home/css/nouislider.min.css')}}"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css')}}">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="{{ asset('home/css/style.css')}}"/>




    </head>
	<body>
		

		@include('layouts.header')
        @yield('content')
        @include('layouts.footer')

		

		

        		{{-- <!-- jQuery Plugins --> --}}
		<script src="{{ asset('home/js/jquery.min.js')}}"></script>
		<script src="{{ asset('home/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('home/js/slick.min.js')}}"></script>
		<script src="{{ asset('home/js/nouislider.min.js')}}"></script>
		<script src="{{ asset('home/js/jquery.zoom.min.js')}}"></script>
		<script src="{{ asset('home/js/main.js')}}"></script> 



	</body>
</html>




 


