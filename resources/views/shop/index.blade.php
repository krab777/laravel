@extends('layouts.default')

@section('content')
    <section class="news-grid grid">
      <div class="container">
        <div>
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div>
          @endif
        </div>
        <div class="row">
          @forelse($items as $item)  
          <div class="col-md-4">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <a href="{{ route('item', $item->id) }}"><img src="{{ $item->image }}" alt="" class="img-b img-fluid"></a>
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <h2 class="title-2">
                      <a href="{{ route('item', $item->id) }}">{{ $item->name }}</a>
                    </h2>
                  </div>
                  <div class="card-title-b">
                    <a href="{{ route('item', $item->id) }}" class="category-b">$ {{ $item->price }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          @empty
            No products
          @endforelse 
        </div>
        {{ $items->links() }}

      </div>
    </section>

  </main>

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

