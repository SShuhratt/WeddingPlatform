@extends('layouts.app')
@section('title', 'Services')
@section('content')
    <a href="{{ route('services.create') }}" class="btn btn-success mb-3">Add Service</a>
    @foreach ($services as $service)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $service->name }}</h5>
                <p class="card-text">{{ $service->description }}</p>
                <a href="{{ route('services.show', $service) }}" class="btn btn-primary">Show</a>
            </div>
        </div>
    @endforeach
@endsection
