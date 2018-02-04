<!DOCTYPE html>
<html>
<head>
	<title>
		MY PROJECT
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css"  href="{{URL::asset('css/main.css')}}">
	<link rel="stylesheet" type="text/css"  href="{{URL::asset('css/open-iconic.css')}}">
	<link rel="stylesheet" type="text/css"  href="{{URL::asset('js/bootstrap.min.js')}}">
	<script defer src="{{URL::asset('fonts/fontawesome-all.js')}}"></script>
	@yield('src')
</head>
<body >

	@include('partials.header')
	@yield('content')


	<script src="{{URL::asset('js/jquery-3.2.1.js')	}}"></script>
	<script src="{{URL::asset('js/bootstrap.min.js')	}}"></script>
	@yield('script')
</body>
</html>