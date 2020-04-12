@extends('dashboard.layouts.dashboard')

@section('title', 'Edit Item')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.watchItems') }}">Item</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Edit Items {{ $item->id }}</h1>
            <p class="lead">The page where you can edit items</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.watchItems') }}" role="button">Back</a>
        </div>

        <div class="mx-auto">
            {!! Form::open(['url' => route('dashboard.items.update', $item)]) !!}
            @method('put') 
            @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $item->name, ['class' => 'form-control']) !!}

                            {!! Form::label('description', 'Description') !!}
                            {!! Form::text('description', $item->description, ['class' => 'form-control']) !!}

                            {!! Form::label('price', 'Price') !!}
                            {!! Form::text('price', $item->price, ['class' => 'form-control']) !!}

                            {!! Form::label('total_count', 'Total count') !!}
                            {!! Form::text('total_count', $item->total_count, ['class' => 'form-control']) !!}
                            
                            {!! Form::label('image', 'Image') !!}
                            {!! Form::text('image', $item->image, ['class' => 'form-control']) !!}
                        </div>        
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::submit('Edit', ['class' => 'btn btn-success']); !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
