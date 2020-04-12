@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <h1 class="my-4">@lang('shop.shop_name')</h1>
      <div class="list-group mb-4">
        <a href="#" class="list-group-item">@lang('shop.category') 1</a>
        <a href="#" class="list-group-item">@lang('shop.category') 2</a>
        <a href="#" class="list-group-item">@lang('shop.category') 3</a>
      </div>
    </div>

    <div class="col-lg-9 col-xl-9 mx-auto">
      <div>            
        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}  
          </div>
        @endif
      </div>

      <div class="row">
        @forelse($items as $item)   
          <div class="col-lg-6 col-xl-4 mb-4">             
            <div class="card h-100 ">
              <a href="{{ route('item', $item->id) }}" ><img class="card-img-top" src="{{ $item->image }}" alt=""></a>
              <div class="card-body d-flex align-items-start flex-column">
                <h4 class="card-title">
                  <a href="{{ route('item', $item->id) }}">{{ $item->name }}</a>
                </h4>
                
                <h5>$ {{ $item->price }}</h5>
                <p class="card-text">{{ $item->description }}</p>

                <div class="mt-auto align-self-center">
                  <div>
                    <a class="align-bottom btn btn-success" href="{{ route('addToCart', $item->id) }} ">Add to cart</a>
                    <!-- <button title="add" class="add align-bottom btn btn-success">Add to cart</button> -->
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
  </div>
</div>

<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

<script>
  $('.add').click(function(){

    $.ajax({
      url: '{{ route('addToCart', $item->id) }}',
      type: 'get',
      data: {{ $item->id }},
      jsonp: 'callback',
      dataType: 'jsonp',
      success: function() {
        console.log({{$item->id}});

        callback.call(this, data);
      },
      error: function(data) {
      }
    });
})
</script>

      
@endsection

