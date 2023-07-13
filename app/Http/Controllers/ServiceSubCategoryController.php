<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\ServiceSubCategory;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ServiceSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = ServiceSubCategory::all();
        return view('admin.services.subcategories.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ServiceCategory::all();
        return view('admin.services.subcategories.create', compact('categories'));
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
            'name' => 'required|unique:service_categories,title',
            'image' => 'required|mimes:png,jpeg,svg,jpg',
            'category' => 'required'
        ]);
        try {
            $image = $request->image;
            $image_name = time() . '.' . $image->extension();
            $image->move(public_path('service/subcategories/images'), $image_name);
            ServiceSubCategory::create([
                'title' => $request->name,
                'image' => $image_name,
                'user_id' => Auth::user()->id,
                'category_id' => $request->category
            ]);
            return redirect()->route('service-subcategories.index')->with('success', 'Service SubCategory added successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSubCategory $serviceSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serviceSubCategory = ServiceSubCategory::findOrFail($id);
        $categories = ServiceCategory::all();
        return view('admin.services.subcategories.edit', compact('categories', 'serviceSubCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $serviceSubCategory = ServiceSubCategory::findOrFail($id);
        $request->validate([
            'name' => 'required|unique:service_categories,title,'.$serviceSubCategory->id,
            'image' => 'nullable|mimes:png,jpeg,svg,jpg',
            'category' => 'required'
        ]);
        try {
            $image_name = $serviceSubCategory->image;
            if ($request->has('image')) {
                $image = $request->image;
                $image_name = time() . '.' . $image->extension();
                $image->move(public_path('service/subcategories/images'), $image_name);
            }
            $serviceSubCategory->update([
                'title' => $request->name,
                'image' => $image_name,
                'category_id' => $request->category
            ]);
            return redirect()->route('service-subcategories.index')->with('success', 'Service SubCategory updated successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceSubCategory  $serviceSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $serviceSubCategory = ServiceSubCategory::findOrFail($id);
        $serviceSubCategory->delete();
        return redirect()->route('service-subcategories.index')->with('success','Service Category deleted successfully');
    }
}
