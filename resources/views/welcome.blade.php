@extends('layout')

@section('title', 'Welcome')

@section('content')
    <div class="text-center mt-5">
        <h1 class="display-4">Welcome to Halcon</h1>
        <p class="lead">This is a simple web application built with Laravel.</p>
        <p>Use the navigation links above to explore different sections of the application.</p>
        <a href="{{ route('orders.index') }}" class="btn btn-primary btn-lg mt-3">View Orders</a>
    </div>
@endsection