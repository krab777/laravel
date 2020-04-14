@extends('dashboard.layouts.dashboard')

@section('title', 'Item')

@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ route('dashboard.watchItems') }}">Items</a></li>
      <li class="breadcrumb-item active" aria-current="page">Show item - {{$item->id}}</li>
    </ol>
  </nav>
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
            <p><a class="btn btn-primary btn-lg" href="{{ route('dashboard.watchItems') }}" role="button">Back</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
@endsection

