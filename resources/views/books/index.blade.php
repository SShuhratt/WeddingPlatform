@extends('layouts.app')
@section('title', 'Books')
@section('content')
    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Add Book</a>
    @foreach ($books as $book)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title }}</h5>
                <p class="card-text">{{ $book->description }}</p>
                <a href="{{ route('books.show', $book) }}" class="btn btn-primary">Show</a>
            </div>
        </div>
    @endforeach
@endsection
