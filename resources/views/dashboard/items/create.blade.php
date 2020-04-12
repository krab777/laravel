@extends('dashboard.layouts.dashboard')

@section('title', 'Item creation')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Items</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Item</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Add Item</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.') }}" role="button">Back</a>
        </div>

        {!! Form::open(['url' => route('dashboard.items.store')]) !!}
            @include('dashboard.items.blocks.form.fields')
            <div class="form-group d-flex">
                {!! Form::submit('Add', ['class' => 'btn btn-success mx-auto']); !!}
            </div>
        {!! Form::close() !!}

    </div>
@endsection
