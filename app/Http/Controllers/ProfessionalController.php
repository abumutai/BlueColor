<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionalController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }
    public function dashboard()
    {
        return view('home.professionals.dashboard.index');
    }
    public function services()
    {
        $services = Service::with('category','subcategory','city','county')->where('user_id',Auth::user()->id)->get();
        // return $services;

        return view('home.professionals.services.index')->with('services',$services);
    }
    public function bookings()
    {
        $bookings = Booking::with('user','service')->get();
        // return $bookings;
        return view('home.professionals.bookings.index')->with('bookings',$bookings);
    }
}
