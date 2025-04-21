<?php

namespace App\Http\Controllers\Dashboard\Admin\Location;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LocationRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::get(); // تأكد من أن القيم ليست 0
//        dd($locations);
        return view('dashboard.admin.location.index', compact('locations'));
    }

    public function create()
    {
        return view('dashboard.admin.location.create');
    }

    public function store(LocationRequest $request)
    {
        $validated = $request->validated();
        $location = Location::create($validated);
        return redirect()->route('admin.locations')->with('success', $location->name . ' created successfully.');
    }

    public function edit($location_name)
    {
        $location = Location::where('location_name', $location_name)->firstOrFail();
        return view('dashboard.admin.location.edit', compact('location'));
    }

    public function update(LocationRequest $request, $location_name)
    {
        $location = Location::where('location_name', $location_name)->firstOrFail();
        $validated = $request->validated();
        $location->update($validated);
        return redirect()->route('admin.locations')->with('success', $location->location_name . ' updated successfully.');

    }

    public function delete($location_name)
    {
        $location = Location::where('location_name', $location_name)->firstOrFail();
        return redirect()->route('admin.locations')->with('success-delete', $location->location_name . ' deleted successfully.');

    }
}
