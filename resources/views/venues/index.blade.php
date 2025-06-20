@extends('layouts.app')
@section('title', 'Venues')
@section('content')
    <a href="{{ route('venues.create') }}" class="btn btn-success mb-3">Add Venue</a>
    @foreach ($venues as $venue)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $venue->name }}</h5>
                <p class="card-text">{{ $venue->description }}</p>
                <a href="{{ route('venues.show', $venue) }}" class="btn btn-primary">Show</a>
            </div>
        </div>
    @endforeach
@endsection
