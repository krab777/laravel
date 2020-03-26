@extends('shop.layouts.default')

@section('content')
        <div class="card my-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">{{ $item['title'] }}</h3>
            <h4>$ {{ $item['price'] }}</h4>
            <p class="card-text">{{ $item['desc'] }}</p>
          <p><a class="btn btn-primary btn-lg" href="/blog/public/" role="button">Back</a></p>
          </div>
        </div>
        <div class="col-lg-9">
      </div>
@endsection

