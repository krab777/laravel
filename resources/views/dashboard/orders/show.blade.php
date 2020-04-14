@extends('dashboard.layouts.dashboard')

@section('content')

<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ route('dashboard.orders') }}">Orders</a></li>
      <li class="breadcrumb-item active" aria-current="page">Show</li>
    </ol>
  </nav>     
  <div class="row">
      
    @forelse($userOrder as $order)             
      <div class="col-10 my-3 mx-auto">             
        <div class="card h-100 ">
          <div class="card-body d-flex align-items-start flex-column mx-auto">
          <!-- <p class="card-text">{{ ($order->cart) }}</p> -->
          
          <h2 class="card-text">Order id: {{ $order->id }}</h2> 

          <h2 class="card-text">Order sum: {{ $order->sum }}</h2>                 

          <h3 class="card-text">Order status: {{ $order->statuses->name }}</h3>
          <hr>
          <?php 
            $order->cart = json_decode($order->cart);
          ?>
          @foreach($order->cart as $items) 
            
            @foreach($items->items as $item) 
              <h4 class="card-text"> 
                <a href="{{ route('item', $item->id) }}">Item name: {{ $item->name }} | Item id: {{ $item->id }}</a> 
              </h4>
            @endforeach

            <h5 class="card-text"> 
              Count of items: {{ $items->count }}
            </h5>

            <h5 class="card-text"> 
              Price for one item: {{ $items->price }}
            </h5>

            <h5 class="card-text"> 
              Sum of items: {{ $items->sum }}
            </h5>
            <hr>
          @endforeach
            {!! Form::open(['url' => route('dashboard.orders.update', $order)]) !!}
              @method('put') 
              @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            {!! Form::label('status_id', 'Status') !!}
                            {!! Form::select('status_id', ['1' => 'In progress', '2' => 'Done', '3'=> 'Canceled'], $order->status_id); !!}

                            @error('status')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror

                        </div>        
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit', ['class' => 'btn btn-success']); !!}
                </div>
            {!! Form::close() !!}
          </div>


        </div>
        
                    
      </div>        
    @empty
      No orders
    @endforelse 
  </div>
</div>
     
@endsection

