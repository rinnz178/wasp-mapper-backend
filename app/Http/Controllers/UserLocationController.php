<?php

namespace App\Http\Controllers;

use App\Models\UserLocation;
use Illuminate\Http\Request;
class UserLocationController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'uuid' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
        ]);

        // Update or create location record based on UUID
        $location = UserLocation::updateOrCreate(
            ['uuid' => $validated['uuid']], // Check if a location with this UUID exists
            ['latitude' => $validated['latitude'], 'longitude' => $validated['longitude']] // Update or create with these values
        );


        return response()->json(['status' => 'Location updated', 'location' => $location]);
    }
    public function index()
    {
        $userLocations = UserLocation::all();

        return response()->json($userLocations, 200);
    }
}
