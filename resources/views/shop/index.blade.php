@extends('layouts.default')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-3">

        <h1 class="my-4">@lang('shop.shop_name')</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">@lang('shop.category') 1</a>
          <a href="#" class="list-group-item">@lang('shop.category') 2</a>
          <a href="#" class="list-group-item">@lang('shop.category') 3</a>
        </div>

      </div>

      <div class="col-lg-9 mx-auto">
        <!-- <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
        <div class="row">
          @forelse($items as $item)   
            <div class="col-lg-4 col-md-6 mb-4">             
              <div class="card h-100 ">
                <a href="item/{{$item->id}}" ><img class="card-img-top" src="{{ $item->image }}" alt=""></a>
                <div class="card-body d-flex align-items-start flex-column">
                  <h4 class="card-title">
                    <a href="item/{{ $item->id }}">{{ $item->name }}</a>
                  </h4>
                  
                  <h5>$ {{ $item->price }}</h5>
                  <p class="card-text">{{ $item->description }}</p>

                  <div class="mt-auto align-self-center">
                    <div>
                      <a class="align-bottom btn btn-success" href="{{ route('addToCart', $item->id) }} ">Add to cart</a>
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

      
@endsection

