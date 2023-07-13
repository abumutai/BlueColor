<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\County;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use App\Models\User;
use App\Services\UploadImageService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        // return $services;
        $categories = ServiceCategory::all();
        return view('admin.services.index',compact('services','categories'));
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
        $providers = User::where('user_type',1)->get();
        $cities = City::all();
        $counties = County::all();
        return view('admin.services.create',compact('categories','subcategories','providers','cities','counties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UploadImageService $uploadImageService)
    {
        $request->validate([
            'provider' => 'required',
            'title' => 'required|string',
            'amount' => 'required|numeric',
            'county' => 'required',
            'city' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'image' => 'required|mimes:png,jpeg,jpg,svg',
            'description' => 'required|string'
        ]);
        try {
           $image = $uploadImageService->upload('services',$request->image);
           Service::create([
                'provider_id' => $request->provider,
                'title' => $request->title,
                'amount' => $request->amount,
                'county_id' => $request->county,
                'city_id' => $request->city,
                'address' => $request->county.' county ,'.$request->city.' city/town',
                'category_id' => $request->category,
                'sub_category_id' => $request->subcategory,
                'description' => $request->description,
                'user_id' => Auth::user()->id,
                'image' => $image
           ]);
           return redirect()->route('admin-services.index')->with('success','Service created successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.')->withInput($request->input());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
