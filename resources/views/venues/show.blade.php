@extends('layouts.app')
@section('title', $venue->name)
@section('content')
    <h1>{{ $venue->name }}</h1>
    <p>{{ $venue->description }}</p>
    <p><strong>Address:</strong> {{ $venue->address }}</p>
    <p><strong>Location:</strong> {{ $venue->location }}</p>
    <p><strong>Capacity:</strong> {{ $venue->capacity }}</p>
    <p><strong>Price:</strong> ${{ $venue->price }}</p>
    <a href="{{ $venue->url }}" target="_blank">External Link</a>
    <img src="{{ $venue->image_url }}" alt="{{ $venue->name }}" class="img-fluid mt-3">
@endsection
