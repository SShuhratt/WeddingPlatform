<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Cache::remember('venues', 600, function () {
            return Venue::all();
        });
        return view('venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('venues.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'address'       => 'required',
            'location_url'       => 'required|unique:venues,location',
            'price'         => 'required|numeric',
            'image_url'     => 'required|url',
            'capacity'      => 'required|numeric',
            'url'           => 'required|url',
        ]);

        $venue = new Venue();
        $venue->save();
        return redirect()->route('venues.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Venue $venue)
    {
        return view('venues.show', compact('venue'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venue $venue)
    {
        return view('venues.edit', compact('venue'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venue $venue)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'address'       => 'required',
            'location_url'       => 'required',
            'price'         => 'required|numeric',
            'image_url'     => 'required|url',
            'capacity'      => 'required|numeric',
            'url'           => 'required|url',
        ]);

        $venue->update($request->all());
        return redirect()->route('venues.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venue $venue)
    {
        $venue->delete();
        return redirect()->route('venues.index');
    }
}
