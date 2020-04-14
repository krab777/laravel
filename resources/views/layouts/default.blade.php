<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ 'css/app.css' }}"> -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">  
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <!-- <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  	body {
	    height: 100%;
	    max-height: 300px;
  	}
  </style>

</head>
<body>
	@include('layouts.blocks.nav.index')

  	@yield('content')

  @include('layouts.blocks.footer.index')
  

	<script src="{{ asset('/js/app.js') }}"></script>
  <!-- <script src="assets/vendor/jquery/jquery.min.js"></script> -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <!-- <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script> -->
  <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>  
  <script src="assets/js/main.js"></script>
  	@stack('scripts')
</body>
</html>