@extends('dashboard.layouts.dashboard')

@section('title', 'Users')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-6">Users</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.users.create') }}" role="button">Add User</a>
        </div>

        <div>
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}  
            </div>
          @endif
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Created at</th>
                <th scope="col">Role</th>
                <th colspan = 3>Functions</th>             
            </tr>
            </thead>
            <tbody>
            @forelse($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('dashboard.users.show', $user->id ) }}" role="button">Info</a>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('dashboard.users.edit', $user->id ) }}" role="button">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.users.destroy', $user ?? ''->id)}}" method="post" onsubmit = 'return confirm("Do you want to delete this user?"');>
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" onclick='return confirm("Delete user?")' type="submit">Delete</button>
                        </form>               
                    </td>     
                             
                </tr>
            @empty
                <tr>
                    No Users
                </tr>
            @endforelse
            </tbody>
        </table>

        {{ $users->links() }}

            @push('scripts')
                    <script>
            function confirmDelete() {
                    return confirm('Are you sure you want to delete?');
                }
        </script>
        @endpush
    </div>

@endsection
