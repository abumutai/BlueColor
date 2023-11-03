<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('user_id',Auth::user()->id)->paginate(10);
        return view('home.professionals.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        $subcategories = ServiceSubCategory::all();
        $counties = County::all();
        $cities = City::all();
        return view('home.professionals.services.create',compact('categories','subcategories','cities','counties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'title' => 'required',
            'charges' => 'required|numeric',
            'category' => 'required',
            'subcategory' => 'required',
            'county' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg,svg'
        ]);
        try {
            $image = $request->image;
            Service::create([
                'provider_id' => Auth::user()->id,
                'title' => $request->title,
                'amount' => $request->charges,
                'county_id' => $request->county,
                'city_id' => $request->city,
                'address' => $request->address,
                'category_id' => $request->category,
                'sub_category_id' => $request->subcategory,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'image' => Str::slug($image,'-')
            ]);
            return redirect()->route('services.index')->with('success','Service added successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $categories = ServiceCategory::all();
        $subcategories = ServiceSubCategory::all();
        $counties = County::all();
        $cities = City::all();
        return view('home.professionals.services.edit',compact('categories','subcategories','cities','counties','service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'charges' => 'required|numeric',
            'category' => 'required',
            'subcategory' => 'required',
            'county' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpeg,jpg,svg'
        ]);
        try {
            $image_name = $service->image;
            if ($request->has('image')) {
                $image = $request->image;
                $image_name = time().'.'.$image->extension();
                $image->move(public_path('service/images'),$image_name);
            }
            $service->update([
                'title' => $request->title,
                'amount' => $request->charges,
                'county_id' => $request->county,
                'city_id' => $request->city,
                'address' => $request->address,
                'category_id' => $request->category,
                'sub_category_id' => $request->subcategory,
                'description' => $request->description,
                'image' => $image_name
            ]);
            return redirect()->route('services.index')->with('success','Service details updated successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success','Service details deleted successfully.');
    }
}
