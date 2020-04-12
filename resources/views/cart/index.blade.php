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
      <?php 
        $arrs = json_decode($cartItem->items);
      ?>

      @forelse($arrs as $arr) 
      <div class="col-lg-6 col-md-6 mb-4">             
        <div class="card h-100 ">
          <a href="item/{{ $arr->id }}"><img class="card-img-top" src="{{ $arr->image }}" alt=""></a>
          <div class="card-body d-flex align-items-start flex-column">
            <h4 class="card-title"> 
              <a href="item/{{ $arr->id }}">{{ $arr->name }}</a>                
            </h4>
            
            <h5>$ {{ $arr->price }}</h5>           

            <div class="mt-auto align-self-center">    
                <div>                    
                  <p class="card-text">ID: {{ $cartItem->id }} | User id: {{ $cartItem->user_id }} | Item id: {{ $cartItem->item_id }}</p>
                  <p class="card-text">Total price of items: {{ $cartItem->price * $cartItem->count }}</p>
                </div>

                <div class="mr-auto">
                  {!! Form::open(['url' => route('cart.update', $cartItem)]) !!}
                    @method('put') 
                    @csrf
                    <p class="card-text">Count items: {!! Form::number('count', $cartItem->count); !!}</p>
                    @error('count')
                      <div class="alert alert-danger mt-3" >{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                      {!! Form::submit('Edit', ['class' => 'btn btn-success']); !!}
                    </div>
                  {!! Form::close() !!}
                </div>   

                <div> 
                  <form action="{{ route('cart.destroy', $cartItem)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick='return confirm("Delete this item?")' type="submit">Delete</button>
                  </form>   
                </div>                       
            </div>
          </div>
        </div>
        @empty
        @endforelse            
      </div>  
      @empty
        <div class="mx-auto">
          <h2>Your cart is empty now</h2>
        </div>
      @endforelse 

  </div>

      @if(!empty($cartItems))   
        <div class="mr-auto">
          <a class="btn btn-success" href="{{ route('addToOrder')}}">Make order</a>
          <p class="">Total sum: {{ App\Models\Cart::where("user_id", Auth::user()->id)->sum('sum') }}</p>
        </div>        
      @endif 
    
  
  

</div>
  
@endsection

