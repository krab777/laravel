@extends('dashboard.layouts.dashboard')

@section('title', 'Countries')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Countries</li>
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Countries</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
                to featured content or information.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('dashboard.countries.create') }}" role="button">Add
                Country</a>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название</th>
            </tr>
            </thead>
            <tbody>
            @forelse($countries as $country)
                <tr>
                    <th scope="row">{{ $country->id }}</th>
                    <td>{{ $country->name }}</td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>

        {{ $countries->links() }}
    </div>
@endsection
