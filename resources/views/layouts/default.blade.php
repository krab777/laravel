<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
	
	<!-- <link rel="stylesheet" href="{{ mix('/css/app.css') }}"> -->
	<!-- <link rel="stylesheet" href="{{ 'css/app.css' }}"> -->
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">  

</head>
<body>
	@include('layouts.blocks.nav.index')

  	@yield('content')

 	@include('layouts.blocks.footer.index')  

	<script src="{{ asset('/js/app.js') }}"></script>
  
</body>
</html>