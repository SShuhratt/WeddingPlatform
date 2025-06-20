@extends('layouts.app')
@section('title', 'Edit Service')
@section('content')
    <form action="{{ route('services.update', $service) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" class="form-control mb-2" value="{{ $service->name }}">
        <textarea name="description" class="form-control mb-2">{{ $service->description }}</textarea>
        <input type="number" step="0.01" name="price" class="form-control mb-2" value="{{ $service->price }}">
        <input type="url" name="image_url" class="form-control mb-2" value="{{ $service->image_url }}">
        <input type="url" name="url" class="form-control mb-2" value="{{ $service->url }}">
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
