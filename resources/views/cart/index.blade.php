@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    @forelse($cart as $cart)   

      <div class="col-lg-4 col-md-6 mb-4">             
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">ID: {{ $cart->id }}</p>
            <p class="card-text">User id {{ $cart->user_id }}</p>
            <p class="card-text">Item id: {{ $cart->item_id }}</p>
            <p class="card-text">Item price: {{ $cart->price }}</p>
            <p class="card-text">Cart count: {{ $cart->count }}</p>
          </div>
        </div>              
      </div>

      @empty
        No products
      @endforelse 
  </div>
</div>
  
@endsection

