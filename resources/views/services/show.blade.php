@extends('layouts.app')
@section('title', $service->name)
@section('content')
    <h1>{{ $service->name }}</h1>
    <p>{{ $service->description }}</p>
    <p><strong>Price:</strong> ${{ $service->price }}</p>
    <a href="{{ $service->url }}" target="_blank">External Link</a>
    <img src="{{ $service->image_url }}" alt="{{ $service->name }}" class="img-fluid mt-3">
@endsection
