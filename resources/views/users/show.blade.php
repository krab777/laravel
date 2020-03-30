@extends('layouts.default')

@section('content')
<div class="container">
  <div class="jumbotron mx-auto">
    <div class="container">
      <h1 class="display-3">User name: {{ $user->name }}</h1>
      <p>Email: <b>{{ $user->email }}</b></p>
      <p>Users role: <b>{{ $user->role_id }}</b></p>
      <p>Email verified at: <b>{{ $user->email_verified_at }}</b></p>
      <p>Users remember token: <b>{{ $user->remember_token }}</b></p>

      <p><a class="btn btn-primary btn-lg" href="/blog/public/users/" role="button">Back</a></p>
    </div>
  </div>
</div>
	
@endsection

