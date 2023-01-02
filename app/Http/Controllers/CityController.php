<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $counties = County::all();
        return view('admin.cities.create', compact('counties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities,name',
            'county' => 'required'
        ]);
        try {
            City::create([
                'name' => $request->name,
                'county_id' => $request->county,
                'user_id' => Auth::user()->id
            ]);
            return redirect()->route('cities.index')->with('success', 'City details added successfully');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city)
    {
        $counties = County::all();
        return view('admin.cities.edit', compact('counties','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|unique:cities,name,'.$city->id,
            'county' => 'required'
        ]);
        try {
            $city->update([
                'name' => $request->name,
                'county_id' => $request->county,
            ]);
            return redirect()->route('cities.index')->with('success', 'City details updated successfully');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('cities.index')->with('success', 'City details deleted successfully');
    }
}
