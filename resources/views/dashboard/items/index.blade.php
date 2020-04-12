@extends('dashboard.layouts.dashboard')

@section('title', 'Items')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Items</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-6">Items</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.items.create') }}" role="button">Add
                new item</a>
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
                <th scope="col">Price</th>
                <th scope="col">Total count</th>
                <th scope="col">Image</th>                
                <th colspan = 3>Functions</th>    
            </tr>
            </thead>
            <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>                    
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->total_count }}</td>
                    <td><img style="max-width: 100px;" src="{{ $item->image }}" alt="{{ $item->image }}"></td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('dashboard.getOneItem', $item->id ) }}" role="button">Info</a>
                    </td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="{{ route('dashboard.items.edit', $item->id ) }}" role="button">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('dashboard.items.destroy', $item ?? ''->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger btn-sm" onclick='return confirm("Delete item?")' type="submit">Delete</button>
                          <!-- onclick='return confirm("Delete item?")' -->
                        </form>               
                    </td>     

                </tr>
            @empty
            @endforelse
            </tbody>
        </table>

        {{ $items->links() }}
    </div>
@endsection
