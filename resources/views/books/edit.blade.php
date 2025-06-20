@extends('layouts.app')
@section('title', 'Edit Book')
@section('content')
    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" class="form-control mb-2" value="{{ $book->title }}">
        <input type="text" name="author" class="form-control mb-2" value="{{ $book->author }}">
        <textarea name="description" class="form-control mb-2">{{ $book->description }}</textarea>
        <input type="number" step="0.01" name="price" class="form-control mb-2" value="{{ $book->price }}">
        <input type="url" name="image_url" class="form-control mb-2" value="{{ $book->image_url }}">
        <input type="url" name="url" class="form-control mb-2" value="{{ $book->url }}">
        <button class="btn btn-primary">Update</button>
    </form>
@endsection
