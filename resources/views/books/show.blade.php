@extends('layouts.app')
@section('title', $book->title)
@section('content')
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p>{{ $book->description }}</p>
    <p><strong>Price:</strong> ${{ $book->price }}</p>
    <a href="{{ $book->url }}" target="_blank">External Link</a>
    <img src="{{ $book->image_url }}" alt="{{ $book->title }}" class="img-fluid mt-3">
@endsection
