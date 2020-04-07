@extends('dashboard.layouts.dashboard')

@section('title', 'Edit User')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Edit User {{ $user->id }}</h1>
            <p class="lead">The page where you can edit users</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.users.index') }}" role="button">Back</a>
        </div>

        <div class="mx-auto">
            {!! Form::open(['url' => route('dashboard.users.update', $user)]) !!}
            @method('put') 
            @csrf
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}

                            @error('name')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror

                            {!! Form::label('email', 'Email') !!}
                            {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}

                            @error('email')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror

                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}

                            @error('password')
                                <div class="alert alert-danger mt-3" >{{ $message }}</div>
                            @enderror                            

                            {!! Form::radio('role_id', '1' , $user->role_id == 1) !!}
                            {!! Form::label('1', 'User') !!}<br>
                                
                            {!! Form::radio('role_id', '2' , $user->role_id == 2) !!}
                            {!! Form::label('2', 'Moderator') !!}<br>

                            {!! Form::radio('role_id', '3' , $user->role_id == 3) !!}
                            {!! Form::label('3', 'Admin') !!}<br>
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
