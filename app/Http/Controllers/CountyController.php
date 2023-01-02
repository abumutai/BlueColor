<?php

namespace App\Http\Controllers;

use App\Models\County;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CountyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counties = County::all();
        return view('admin.counties.index',compact('counties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.counties.create');
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
            'name' => 'required|unique:counties,name',
            'county_number' => 'required|unique:counties,county_number'
        ]);
        try {
            County::create([
                'name' => $request->name,
                'county_number' => $request->county_number,
                'user_id' => Auth::user()->id
            ]);
            return redirect()->route('counties.index')->with('success','County details added successfully');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function show(County $county)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function edit(County $county)
    {
        return view('admin.counties.edit',compact('county'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, County $county)
    {
        $request->validate([
            'name' => 'required|unique:counties,name,'.$county->id,
            'county_number' => 'required|unique:counties,county_number,'.$county->id
        ]);
        try {
           $county->update([
                'name' => $request->name,
                'county_number' => $request->county_number,
            ]);
            return redirect()->route('counties.index')->with('success','County details updated successfully');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\County  $county
     * @return \Illuminate\Http\Response
     */
    public function destroy(County $county)
    {
        $county->delete();
        return redirect()->route('counties.index')->with('success','County details deleted successfully');
    }
}
