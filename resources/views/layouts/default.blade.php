<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ 'css/app.css' }}"> -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">  
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


	<script src="{{ asset('/js/app.js') }}"></script>
  	
  	@stack('scripts')
</body>
</html>