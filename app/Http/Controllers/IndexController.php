<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function jobs()
    {
        return view('home.jobs');
    }
    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function candidateDashboard()
    {
        return view('home.candidates.dashboard.index');
    }
    public function candidateProfile()
    {
        return view('home.candidates.dashboard.profile');
    }
    public function candidateApplications()
    {
        return view('home.candidates.dashboard.applications');
    }
    public function candidateEarnings()
    {
        return view('home.candidates.dashboard.earnings');
    }
    public function candidatePasswordChange()
    {
        return view('home.candidates.dashboard.change_password');
    }
    public function employerCandidates()
    {
        return view('home.employers.candidates');
    }
    public function employerProfile()
    {
        return view('home.employers.profile');
    }
    public function employerPost()
    {
        return view('home.employers.dashboard.post');
    }
    public function employerIndex()
    {
        return view('home.employers.dashboard.index');
    }
    public function employerEditProfile()
    {
        return view('home.employers.dashboard.profile');
    }
    public function employerApplications()
    {
        return view('home.employers.dashboard.applications');
    }
    public function employerPasswordChange()
    {
        return view('home.employers.dashboard.change_password');
    }
}
