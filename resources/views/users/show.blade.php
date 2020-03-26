@extends('users.layouts.default')

@section('content')
	<div class="jumbotron">
        <div class="container">
          <h1 class="display-3">{{ $user['username'] }}</h1>
          <p>{{ $user['about_user'] }}</p>
          <p><a class="btn btn-primary btn-lg" href="/blog/public/users/" role="button">Back</a></p>
        </div>
      </div>
@endsection

