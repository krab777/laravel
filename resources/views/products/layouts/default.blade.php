<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
	<link rel="stylesheet" href="{{ 'css/app.css' }}">

</head>
<body>
	@include('products.layouts.blocks.nav.index')

  @yield('content')

  @include('products.layouts.blocks.footer.index')
  

	<script src="{{ 'js/app.js' }}"></script>
</body>
</html>