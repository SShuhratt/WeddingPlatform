@extends('layouts.app')
@section('title', 'Add Book')
@section('content')
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" class="form-control mb-2" placeholder="Title">
        <input type="text" name="author" class="form-control mb-2" placeholder="Author">
        <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>
        <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Price">
        <input type="url" name="image_url" class="form-control mb-2" placeholder="Image URL">
        <input type="url" name="url" class="form-control mb-2" placeholder="External URL">
        <button class="btn btn-success">Save</button>
    </form>
@endsection
