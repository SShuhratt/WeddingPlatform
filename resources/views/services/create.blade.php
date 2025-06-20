@extends('layouts.app')
@section('title', 'Add Service')
@section('content')
    <form action="{{ route('services.store') }}" method="POST">
        @csrf
        <input type="text" name="name" class="form-control mb-2" placeholder="Name">
        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price">
        <input type="url" name="image_url" class="form-control mb-2" placeholder="Image URL">
        <input type="url" name="url" class="form-control mb-2" placeholder="External URL">
        <button class="btn btn-success">Save</button>
    </form>
@endsection
