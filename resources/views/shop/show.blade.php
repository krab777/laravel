@extends('layouts.default')

@section('content')

<main id="main">
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{ $item->name }}</h1>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Intro Single -->

  <!-- ======= Agent Single ======= -->
  <section class="agent-single">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="row">
            <div class="col-md-6">
              <div class="agent-avatar-box">
                <img src="{{ $item->image }}" alt="" class="agent-avatar img-fluid">
              </div>
            </div>
            <div class="col-md-5 section-md-t3">
              <div class="agent-info-box">
                <div class="agent-content mb-3">
                  <div class="info-agents color-a">
                    <h3>
                      <strong>Price: </strong>
                      <span class="color-text-a"> $ {{ $item->price }} </span>
                    </h3>
                    <p>
                      <strong>The count of items - </strong>
                      <span class="color-text-a"> {{ $item->total_count }}</span>
                    </p>
                  </div>
                  <p class="content-d color-text-a">{{ $item->description }}</p>
                </div> 
                <div class="btn-toolbar justify-content-between" >            
                  <a class="align-bottom btn btn-lg btn-success" href="{{ route('addToCart', $item->id) }} ">Add to cart</a>
                  <a class="btn btn-primary btn-lg" href="{{ route('homePage') }}" role="button">Back</a>
                </div>                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <section>
</main><!-- End #main -->
    
@endsection

