<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJourneyRequest;
use App\Http\Requests\UpdateJourneyRequest;
use App\Models\Category;
use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $journeys = Journey::where("name", "LIKE", "%{$query}%")
            ->orWhere("status", "LIKE", "%{$query}%")
            ->paginate(5);
        return view('journey.index', compact('journeys'));
    }
    public function index()
    {
        $journeys = Journey::paginate(5);
        return view('journey.index', compact('journeys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('journey.create', compact('categories'));
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
        $journey->category_id = $request->category_id;
        $journey->status = $request->status;
        $journey->description = $request->description;
        $journey->save();
        return redirect()->route('journey.index');
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
        $categories = Category::all();
        return view('journey.edit', compact('journey', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJourneyRequest $request, Journey $journey)
    {
        $journey->name = $request->name;
        $journey->price = $request->price;
        $journey->seat = $request->seat;
        $journey->category_id = $request->category_id;
        $journey->status = $request->status;
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
