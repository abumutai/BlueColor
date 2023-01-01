<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('home.professionals.dashboard.services');
    }
}
