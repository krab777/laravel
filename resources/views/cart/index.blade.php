@extends('layouts.default')

@section('content')
<div class="container">
  <div>
      @if(session()->get('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}  
        </div>
      @endif
    </div>

  <div class="row">

    @forelse($cartItems as $cartItem)   

      <div class="col-lg-4 col-md-6 mb-4">             
        <div class="card h-100">
          <div class="card-body">
            <p class="card-text">ID: {{ $cartItem->id }}</p>
            <p class="card-text">User id {{ $cartItem->user_id }}</p>
            <p class="card-text">Item id: {{ $cartItem->item_id }}</p>
            <p class="card-text">Item price: {{ $cartItem->price }}</p>
            
            <div class="">
              <div class="mr-auto">
                {!! Form::open(['url' => route('cart.update', $cartItem->id, $cartItem->item_id)]) !!}
                  @method('put') 
                  @csrf
                  <p class="card-text">Cart count: {!! Form::number('count', $cartItem->count); !!}</p>

                  <div class="form-group">
                      {!! Form::submit('Edit', ['class' => 'btn btn-success']); !!}
                  </div>
                {!! Form::close() !!}
              </div>   
              
              <div> 
                <form action="{{ route('cart.destroy', $cartItem)}}" method="post" >
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick='return confirm("Delete this item?")' type="submit">Delete</button>
                </form>   
              </div>                       
            </div>

                
          </div>
        </div>              
      </div>

      @empty
        No products
      @endforelse 
  </div>
</div>
  
@endsection

