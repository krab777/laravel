@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto">
      <div class="card my-4 ">
        <img class="card-img-top img-fluid" src="{{ $item->image }}" alt="">
        <div class="card-body">
          <h3 class="card-title">{{ $item->name }}</h3>
          <h4>$ {{ $item->price }}</h4>
          <h5>The count of items - {{ $item->total_count }}</h5>
          <p class="card-text">{{ $item->description }}</p>
          <div class="btn-toolbar justify-content-between" >            
            <a class="align-bottom btn btn-lg btn-success" href="{{ route('addToCart', $item->id) }} ">Add to cart</a>
            <a class="btn btn-primary btn-lg" href="{{ route('homePage') }}" role="button">Back</a>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
        
@endsection

