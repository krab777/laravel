@extends('shop.layouts.default')

@section('content')

          @forelse($items as $item)     

            <div class="col-lg-4 col-md-6 mb-4">             
              <div class="card h-100">
                <a href="/blog/public/{{ $loop->index }}" ><img class="card-img-top" src="{{ $item['image'] }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/blog/public/{{ $loop->index }}">{{ $item['title'] }}</a>
                  </h4>
                  <h5>$ {{ $item['price'] }}</h5>
                  <p class="card-text">{{ $item['desc'] }}</p>
                </div>
              </div>              
            </div>

            @empty
              No products
            @endforelse 
        </div>
        <!-- /.row -->
      </div>
      <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->

  </div>
@endsection

