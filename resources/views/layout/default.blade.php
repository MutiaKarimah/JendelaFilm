<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/font-awesome/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/separate/vendor/select2.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/separate/vendor/bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/lib/bootstrap/bootstrap.min.css" crossorigin="anonymous">

    @yield('page-css')

    <link rel="stylesheet" href="{{url('public/templates/default')}}/css/main.css">

    <link rel="stylesheet" href="{{url('public/')}}/css/kz-custom.css">
    @yield('styles')
</head>
<body class="menu">
	
	<div class="page-content">
		@yield('content')
	</div>

	<script src="{{url('public/templates/default')}}/js/lib/jquery/jquery.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/tether/tether.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/select2/select2.full.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/lib/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="{{url('public/templates/default')}}/js/plugins.js"></script>
	<script src="{{url('public/templates/default')}}/js/app.js"></script>
	@yield('scripts')
</body>
</html>