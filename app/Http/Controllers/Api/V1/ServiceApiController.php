<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceApiController extends Controller
{
    public function index()
    {
        return response()->json(Service::all(), 201);
    }

    public function show($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }
        return response()->json($service, 201);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'nullable|numeric',
            'image_url'   => 'nullable|url',
            'url'         => 'nullable|url',
        ]);

        $venue = Service::create($validated);
        return response()->json($venue, 201);
    }

    public function update(Request $request, $id)
    {
        $venue = Service::find($id);
        if (!$venue) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $validated = $request->validate([
            'name'        => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'price'       => 'nullable|numeric',
            'image_url'   => 'nullable|url',
            'url'         => 'nullable|url',
        ]);

        $venue->update($validated);
        return response()->json($venue, 201);
    }

    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return response()->json(['message' => 'Service not found'], 404);
        }

        $service->delete();
        return response()->json(['message' => 'Service deleted successfully'], 201);
    }
}
