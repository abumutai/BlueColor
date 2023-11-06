<?php

namespace App\Http\Controllers;

use App\Helpers\ImageHandler;
use App\Models\ServiceCategory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ServiceCategory::latest()->get();
        return view('admin.services.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.categories.create');
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
            'image' => 'required|mimes:png,jpeg,svg,jpg'
        ]);
        try {
            $image_name = $request->name;
            $image_slug = Str::slug($image_name,'-');
            $path = '/services/categories';

            // $image = $request->image;
            // $image_name = time() . '.' . $image->extension();
            // $image->move(public_path('service/categories/images'), $image_name);
           

            ServiceCategory::create([
                'title' => $request->name,
                'image' => $image_slug,
                'user_id' => Auth::user()->id
            ]);
            //pass the image through the image handler class for compressing and storage
            if ($request->hasFile('image')){
                $photo = $request->file('image');
                $f['name'] = $image_slug . '.png';

                $f['path'] = $photo->storeAs(
                    ImageHandler::getUploadPath($path), $f['name'],'public'
                );

                ImageHandler::ImageCompress($photo, $f['path'],396);
            }
            return redirect()->route('service-categories.index')->with('success', 'Service Category added successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCategory $serviceCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.services.categories.edit', compact('serviceCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $request->validate([
            'name' => 'required|unique:service_categories,title,'.$serviceCategory->id,
            'image' => 'nullable|mimes:png,jpeg,svg,jpg'
        ]);
        try {
            $image_name = $serviceCategory->image;
            if ($request->has('image')) {
                $image = $request->image;
                $image_name = time() . '.' . $image->extension();
                $image->move(public_path('service/categories/images'), $image_name);
            }

            $serviceCategory->update([
                'title' => $request->name,
                'image' => $image_name,
            ]);
            return redirect()->route('service-categories.index')->with('success', 'Service Category updated successfully.');
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();
        return redirect()->route('service-categories.index')->with('success','Service Category deleted successfully');
    }

    public function featureToggle(Request $request,$id)
    {
        // Log::info($request->all());
        $category = ServiceCategory::where('id',$id)->first();
        $category ->update([
            'featured' => $request->has('feature') ? 'YES' : 'NO'
        ]);
    }
}
