@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">

        <div>            
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div>
          @endif
        </div>

        
          @forelse($userOrders as $order) 
            
            
             
            <div class="col-6">             
              <div class="card h-100 ">
                <div class="card-body d-flex align-items-start flex-column mx-auto">
                <!-- <p class="card-text">{{ ($order->cart) }}</p> -->

                <h2 class="card-text">Order id: {{ $order->id }}</h2> 

                <h2 class="card-text">Order sum: {{ $order->sum }}</h2>                 

                <h3 class="card-text">Order status: {{ $order->statuses->name }}</h3>
                <hr>

                @foreach($order->cart as $items) 
                  
                  @foreach($items->items as $item) 
                    <h4 class="card-text"> 
                      Item name: {{ $item->name }} | Item id: {{ $item->id }} 
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
                </div>
              </div>              
            </div>
              
          @empty
            No orders
          @endforelse 
        </div>
      </div>
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>




      
@endsection

