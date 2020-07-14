<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Gurdeep singh osahan">
    <meta name="author" content="Gurdeep singh osahan">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '威客') - 威客</title>
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('images/fav.svg')}}">
    <!-- Bootstrap core CSS -->
    <!-- <link href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Font Awesome-->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link href="{{asset('css/materialdesignicons.min.css')}}" media="all" rel="stylesheet" type="text/css">
    <!-- Slick -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet" type="text/css">
    <!-- Lightgallery -->
    <link href="{{asset('css/lightgallery.min.css')}}" rel="stylesheet">
    <!-- Select2 CSS -->
    <link href="http://v.bootstrapmb.com/2020/7/c6d6w8350/vendor/select2/css/select2-bootstrap.css">
    <link href="{{asset('css/select2.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
	<div id="app">
		<!-- Header -->
		@include('layouts._header')
		<!-- Navigation -->
		@include('layouts._navigation')
		<div id="pjax-container">
		@yield('content')
		</div>
		<!-- footer -->
		@include('layouts._footer')
		<!-- footer-->
	</div>
    <!-- Bootstrap core JavaScript -->
    <!-- <script src="/jquery.min.js.下載"></script> -->
    <!-- <script src="/bootstrap.bundle.min.js.下載"></script> -->
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files!In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

    <!-- JS 脚本 -->
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/function.js') }}"></script>
	  <!-- Slick -->
    <script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <!-- lightgallery -->
    <script src="{{asset('js/lightgallery-all.min.js')}}"></script>
    <!-- select2 Js -->
    <script src="{{asset('js/select2.min.js')}}"></script>
    <!-- Custom -->
    <script src="{{asset('js/custom.js')}}"></script>

    @yield('scriptsAfterJs')
</body>

</html>