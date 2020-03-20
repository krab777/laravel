@extends('products.layouts.default')

@section('content')
	<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{ $product['header'] }}</h1>
          <p>{{ $product['content'] }}</p>
          <p><a class="btn btn-primary btn-lg" href="/blog/public/products/" role="button">Back</a></p>
        </div>
      </div>
@endsection