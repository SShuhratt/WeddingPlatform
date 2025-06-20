@extends('layouts.dashboard')

@section('title', 'Books')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($books as $book)
            <div class="col">
                <x-card
                    :title="$book->title"
                    :image="$book->image_url"
                    :price="$book->price"
                    :description="$book->description"
                    :url="$book->url"
                />
            </div>
        @endforeach
    </div>
@endsection
