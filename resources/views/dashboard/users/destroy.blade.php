@extends('dashboard.layouts.dashboard')

@section('title', 'Delete User')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Delete</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Delete User</h1>
            <p class="lead">The page where you can add new users</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.users.index') }}" role="button">Back</a>
        </div>
        <div class="mx-auto">
            {!! Form::open(['url' => route('dashboard.users.store')]) !!}
                @include('dashboard.users.blocks.form.fields')
                <div class="form-group">
                    {!! Form::submit('Delete', ['class' => 'btn btn-success']); !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
