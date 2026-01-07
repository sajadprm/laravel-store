<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> قالب مدیریتی </title>
	<link rel="shortcut icon" href="{{assets('panel/assets/media/image/favicon.png')}}">
	<meta name="theme-color" content="#5867dd">
	<link rel="stylesheet" href="{{assets('panel/vendors/bundle.css')}}" type="text/css">
	<link rel="stylesheet" href="{{assets('panel/vendors/slick/slick.css')}}">
	<link rel="stylesheet" href="{{assets('panel/vendors/slick/slick-theme.css')}}">
	<link rel="stylesheet" href="{{assets('panel/vendors/vmap/jqvmap.min.css')}}">
	<link rel="stylesheet" href="{{assets('panel/assets/css/app.css')}}" type="text/css">
</head>
<body class="small-navigation">
<!--Begin navigation-->
@include('admin.layouts.navigation')
<!--End navigation-->

<!--Begin header-->

@include('admin.layouts.header')
<!--End header-->

<!--Begin content-->


@yield('content')

<!--End content-->


	<script src="{{assets('panel/vendors/bundle.js')}}"></script>
	<script src="{{assets('panel/vendors/slick/slick.min.js')}}"></script>
	<script src="{{assets('panel/vendors/vmap/jquery.vmap.min.js')}}"></script>
	<script src="{{assets('panel/assets/js/app.js')}}"></script>
</body>
</html>