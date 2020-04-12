@extends('dashboard.layouts.dashboard')

@section('title', 'Orders')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-6">Orders</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
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
                    <th scope="col">User name</th>
                    <th scope="col">User email</th>
                    <th scope="col">Sum</th>
                    <th scope="col">Status</th>
                    <th scope="col">About order</th>             
                </tr>
            </thead>
            <tbody>
            @forelse($userOrders as $order)
                <tr>
                    <td scope="row">{{ $order->id }}</td>
                    <td scope="row">{{ $order->user->name }}</td>
                    <td scope="row">{{ $order->user->email }}</td>
                    <td scope="row">{{ $order->sum }}</td>                    
                    <td scope="row">
                        <div class="">
                            {!! Form::open(['url' => route('dashboard.orders.update', $order)]) !!}
                              @method('put') 
                              @csrf
                                <div class="form-inline">
                                    <div class="">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-group">
                                                {!! Form::select('status_id', ['1' => 'In progress', '2' => 'Done', '3'=> 'Canceled'], $order->status_id); !!}

                                                @error('status')
                                                    <div class="alert alert-danger mt-3">{{ $message }}</div>
                                                @enderror

                                            </div>        
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::submit('Edit', ['class' => 'btn btn-success btn-sm']); !!}
                                    </div>
                                </div>
                                
                            {!! Form::close() !!}
                        </div>                        
                    </td>
                    <td scope="row">
                        <a class="btn btn-info btn-sm" href="{{ route('dashboard.order', $order->id ) }}" role="button">Info</a>
                    </td>
                </tr>
            @empty
                <tr>
                    No Orders
                </tr>
            @endforelse
            </tbody>
        </table>

        {{ $userOrders->links() }}

    </div>

@endsection
