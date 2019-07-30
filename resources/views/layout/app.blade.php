<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>FastFood</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
	<link rel="shortcut icon" href="{{ asset('bower_components/naitei-shopping/shopping-assets/images/favicon.ico') }}">
	<link rel="apple-touch-icon" href="{{ asset('bower_components/naitei-shopping/shopping-assets/images/icon.png') }}">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/naitei-shopping/shopping-assets/css/style.css') }}">
	<script type="text/javascript"
		src="{{ asset('bower_components/naitei-shopping/shopping-assets/js/jquery.min.js') }}"></script>
	<link rel="stylesheet"
		href="{{ asset('bower_components/naitei-shopping/shopping-assets/fonts/font-awesome.min.css') }}">
</head>

<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
		@include('shared.navbar')
		<!-- End Header Area -->

		@yield('content')

		<!-- Start Footer Area -->
		@include('shared.footer')
		<!-- End Footer Area -->
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="{{ asset('js/modernizr-3.5.0.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>
	<script src="{{ asset('js/active.js') }}"></script>
</body>

</html>
