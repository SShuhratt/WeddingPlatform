<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueApiController extends Controller
{
    public function index()
    {
        return response()->json(Venue::all(), 201);
    }

    public function show($id)
    {
        $venue = Venue::find($id);
        if (!$venue) {
            return response()->json(['message' => 'Venue not found'], 404);
        }
        return response()->json($venue, 201);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'address'     => 'nullable|string',
            'location'    => 'nullable|string',
            'capacity'    => 'nullable|integer',
            'price'       => 'nullable|numeric',
            'image_url'   => 'nullable|url',
            'url'         => 'nullable|url',
        ]);

        $venue = Venue::create($validated);
        return response()->json($venue, 201);
    }

    public function update(Request $request, $id)
    {
        $venue = Venue::find($id);
        if (!$venue) {
            return response()->json(['message' => 'Venue not found'], 404);
        }

        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'address'     => 'nullable|string',
            'location'    => 'nullable|string',
            'capacity'    => 'nullable|integer',
            'price'       => 'nullable|numeric',
            'image_url'   => 'nullable|url',
            'url'         => 'nullable|url',
        ]);

        $venue->update($validated);
        return response()->json($venue, 201);
    }

    public function destroy($id)
    {
        $venue = Venue::find($id);
        if (!$venue) {
            return response()->json(['message' => 'Venue not found'], 404);
        }

        $venue->delete();
        return response()->json(['message' => 'Venue deleted successfully'], 201);
    }
}
