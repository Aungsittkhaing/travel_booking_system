<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJourneyRequest;
use App\Http\Requests\UpdateJourneyRequest;
use App\Models\Journey;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journeys = Journey::all();
        return view('journey.index', compact('journeys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('journey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJourneyRequest $request)
    {
        // dd($request->all());
        $journey = new Journey();
        $journey->name = $request->name;
        $journey->price = $request->price;
        $journey->seat = $request->seat;
        $journey->description = $request->description;
        $journey->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Journey $journey)
    {
        return view('journey.detail', compact('journey'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journey $journey)
    {
        return view('journey.edit', compact('journey'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJourneyRequest $request, Journey $journey)
    {
        $journey->name = $request->name;
        $journey->price = $request->price;
        $journey->seat = $request->seat;
        $journey->description = $request->description;
        $journey->update();
        return redirect()->route('journey.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journey $journey)
    {
        $journey->delete();
        return back();
    }
}
