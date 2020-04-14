@extends('dashboard.layouts.dashboard')

@section('title', 'User')

@section('content')
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{ route('dashboard.users.index') }}">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
    </ol>
  </nav>
  <div class="jumbotron mx-auto">
    <div class="container">
      <h1 class="display-3">User name: {{ $user->name }}</h1>
      <p>Email: <b>{{ $user->email }}</b></p>
      <p>Users role: <b>{{ $user->role->name }}</b></p>
      <p>Email verified at: <b>{{ $user->email_verified_at }}</b></p>
      <p>Users remember token: <b>{{ $user->remember_token }}</b></p>
      <p>Updated at: <b>{{ $user->updated_at }}</b></p>
      <p>Created at: <b>{{ $user->created_at }}</b></p>
      <p>Password: <b>{{ $user->password }}</b></p>

      <p><a class="btn btn-primary btn-lg" href="{{ route('dashboard.users.index') }}" role="button">Back</a></p>
    </div>
  </div>
</div>
	
@endsection

