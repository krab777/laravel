@extends('layouts.default')

@section('content')
<div class="conteiner">
  <div class="row">
    <main role="main" class="mx-auto">
    <div class="my-3 p-3 bg-white rounded box-shadow">
      <h3 class="border-bottom border-gray pb-2 mb-0">Recent updates</h3>
        @forelse($users as $user)
          <div class="media text-muted pt-3">
            <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
            <p class="border-bottom border-gray">
              <strong class="d-block text-gray-dark"><a href="users/{{ $user->id }}" > {{ $user->name }} </a> </strong> {{ $user->email }}
            </p>
          </div>
        @empty
          No users
        @endforelse 
      </div>
    </main>
  </div>   
</div>
@endsection
