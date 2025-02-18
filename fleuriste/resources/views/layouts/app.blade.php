<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Maison des fleurs') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/open-iconic-bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/animate.css')}}">

        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/magnific-popup.css')}}">

        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/aos.css')}}">

        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/ionicons.min.css')}}">

        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/bootstrap-datepicker.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/jquery.timepicker.css')}}">


        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/icomoon.css')}}">
        <link rel="stylesheet" href="{{asset('ClientDashAssets/css/style.css')}}">

</head>
<body>
@include('layouts.NavBar')
@csrf
@yield('content')
@include('layouts.Footer')
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('ClientDashAssets/js/jquery.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/popper.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/aos.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/jquery.animateNumber.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/scrollax.min.js')}}"></script>
<script src="{{asset('ClientDashAssets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
<script src="{{asset('ClientDashAssets/js/google-map.js')}}"></script>
<script src="{{asset('ClientDashAssets/js/main.js')}}"></script>
</body>
</html>
