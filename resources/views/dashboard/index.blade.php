@extends('dashboard.layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>

            </ol>
        </nav>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Dashboard</h1>
                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
            </div>
        </div>
    </div>
@endsection
