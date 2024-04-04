<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.whatsapp-icon {
  position: fixed;
  bottom: 80px;
  right: 10px;
  z-index: 9999;
}
.facebook-icon{
    position: fixed;
  bottom: 150px;
  right: 10px;
  z-index: 9999;
}
        </style>
 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

<!-- CSS
============================================ -->

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('user/css/vendor/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/font-awesome.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/flaticon/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/slick.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/jquery-ui.min.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/sal.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('user/css/vendor/base.css')}}">
<link rel="stylesheet" href="{{asset('user/css/style.min.css')}}">
<link rel="stylesheet" href="{{asset('user/css/style1.css')}}">

</head>
<body class="sticky-header">
<a href="#top" class="back-to-top" id="backto-top"><i class="fal fa-arrow-up"></i></a>

    @include('customer.layouts.navbar')
    @yield('content')
    @include('customer.layouts.footer')
    

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{asset('user/js/vendor/modernizr.min.js')}}"></script>
    <!-- jQuery JS -->
    <script src="{{asset('user/js/vendor/jquery.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('user/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/slick.min.js')}}"></script>
    <script src="assets/js/vendor/js.cookie.js')}}"></script>
    <!-- <script src="assets/js/vendor/jquery.style.switcher.js"></script> -->
    <script src="{{asset('user/js/vendor/jquery-ui.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/sal.js')}}"></script>
    <script src="{{asset('user/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('user/js/vendor/counterup.js')}}"></script>
    <script src="{{asset('user/js/vendor/waypoints.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('user/js/main.js')}}"></script>

</body>
</html>