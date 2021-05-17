<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>@yield('title')</title>

	<link rel="canonical" href="https://appstack.bootlab.io/dashboard-default.html" />
	<link rel="shortcut icon" href="{{asset('newadmin/img/favicon.ico')}}">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="{{asset('newadmin/css/light.css')}}" rel="stylesheet">
</head>


<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
        @include('include.sidebar')
		<div class="main">
			@include('include.navbar')

            @yield('content')

			@include('include.footer')
		</div>
	</div>
	@stack('preprend-script')
	@include('include.javascript')
	@stack('addon-script')
</body>

</html>