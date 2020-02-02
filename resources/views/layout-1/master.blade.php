<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Easy Camp | @yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

  <style media="screen">
    .nav-page {
      color: white;
    }
  </style>
  @yield('head')

</head>

<body>

  <!-- Navigation -->
  @include('layout-1.navbar')

  <!-- Page Content -->
  @yield('content')
  <!-- /.container -->

  <!-- Footer -->
  @include('layout-1.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  @yield('script')

</body>

</html>
