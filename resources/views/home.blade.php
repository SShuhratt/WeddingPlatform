@extends('layouts.public_dashboard')

@section('title', 'Welcome to WeddingSite')

@section('content')
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">Welcome to WeddingSite</h1>
            <p class="col-md-8 fs-4">
                Explore our books, services, and venues. Quality and convenience at your fingertips.
            </p>
            <a href="/books" class="btn btn-primary btn-lg">Browse Books</a>
        </div>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-4">
            <h4>Books</h4>
            <p>Explore our curated selection of books available online.</p>
            <a href="/books" class="btn btn-outline-primary">View Books</a>
        </div>
        <div class="col-md-4">
            <h4>Services</h4>
            <p>Need something done? Discover helpful services we offer.</p>
            <a href="/services" class="btn btn-outline-primary">View Services</a>
        </div>
        <div class="col-md-4">
            <h4>Venues</h4>
            <p>Find and book venues for your next event or meeting.</p>
            <a href="/venues" class="btn btn-outline-primary">View Venues</a>
        </div>
    </div>
@endsection
