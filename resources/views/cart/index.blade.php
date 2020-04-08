@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    @forelse($cartItems as $cartItem)   

      <div class="col-lg-4 col-md-6 mb-4">             
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">ID: {{ $cartItem->id }}</p>
            <p class="card-text">User id {{ $cartItem->user_id }}</p>
            <p class="card-text">Item id: {{ $cartItem->item_id }}</p>
            <p class="card-text">Item price: {{ $cartItem->price }}</p>
            <p class="card-text">Cart count: {{ $cartItem->count }}</p>
          </div>
        </div>              
      </div>

      @empty
        No products
      @endforelse 
  </div>
</div>
  
@endsection

