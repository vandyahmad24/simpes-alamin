<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>@yield('title')</title>
  <!-- Favicon -->
  @stack('preprend-style')
  @include('include.style')
  @stack('addon-style')
</head>

<body>
  <!-- Sidenav -->
  @auth
  @include('include.navbar')
  @endauth
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @auth
      @include('include.header')
    @endauth
    <!-- Header -->
  @yield('content')
</div>
  @stack('preprend-script')
  @include('include.script')
  @stack('addon-script')
</body>

</html>