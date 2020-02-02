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
  <!-- Font-Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <style media="screen">
    .btn-download {
      font-size: small;
      margin-top: 6px;
      padding-top: 4px;
      padding-bottom: 4px;
      padding-left: 8px;
      padding-right: 8px;
      margin-left: 19px;
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
