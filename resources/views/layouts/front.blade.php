<!DOCTYPE html>
<html lang="en">
<head>
    <title>MCU | @yield('page-title')</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('front/assets/images/favicon.ico')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS -->
    <script defer src="{{asset('front/assets/fontawesome/js/all.js')}}"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('front/assets/plugins/flexslider/flexslider.css')}}">
    <!-- Theme CSS -->
    @stack('css')
    <link rel="stylesheet" href="{{asset('front/assets/css/theme-1.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}">
</head>

<body class="home-page">
<div id="app" class="wrapper">
    @include('layouts.front-header')
    <!-- ******CONTENT****** -->
    @yield('page-content')
</div><!--//wrapper-->
@include('layouts.front-footer')
<!-- Javascript -->
@routes
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/plugins/back-to-top.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/plugins/flexslider/jquery.flexslider-min.js')}}"></script>
<script type="text/javascript" src="{{asset('front/assets/js/main.js')}}"></script>
@stack('js')
@yield('page-js')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=320540251744202&autoLogAppEvents=1"></script>
</body>
</html>