<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Service;
use App\Models\Venue;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'books' => Book::all(),
            'services' => Service::all(),
            'venues' => Venue::all(),
        ]);
    }
}
