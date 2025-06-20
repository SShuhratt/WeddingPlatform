@extends('layouts.app')
@section('title', 'Edit Venue')
@section('content')
    <form action="{{ route('venues.update', $venue) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" class="form-control mb-2" value="{{ $venue->name }}">
        <textarea name="description" class="form-control mb-2">{{ $venue->description }}</textarea>
        <input type="text" name="address" class="form-control mb-2" value="{{ $venue->address }}">
        <input type="text" name="location" class="form-control mb-2" value="{{ $venue->location }}">
        <input type="number" name="capacity" class="form-control mb-2" value="{{ $venue->capacity }}">
        <input type="number" step="0.01" name="price" class="form-control mb-2" value="{{ $venue->price }}">
        <input type="url" name="image_url" class="form-control mb-2" value="{{ $venue->image_url }}">
        <input type="url" name="url" class="form-control mb-2" value="{{ $venue->url }}">
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
