@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="card my-4 mx-auto">
      <img class="card-img-top img-fluid" src="{{ $item->image }}" alt="">
      <div class="card-body">
        <h3 class="card-title">{{ $item->name }}</h3>
        <h4>$ {{ $item->price }}</h4>
        <h5>The count of items - {{ $item->total_count }}</h5>
        <p class="card-text">{{ $item->description }}</p>
      <p><a class="btn btn-primary btn-lg" href="/blog/public/" role="button">Back</a></p>
      </div>
    </div>
  </div>
</div>
        
@endsection

