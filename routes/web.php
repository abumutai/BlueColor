<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(IndexController::class)->group(function(){
    Route::get('jobs','jobs')->name('home.jobs');
    Route::get('about','about')->name('home.about');
    Route::get('contact','contact')->name('home.contact');
    Route::get('candidate/dashboard','candidateDashboard')->name('home.candidate.dashboard');
    Route::get('candidate/profile','candidateProfile')->name('home.candidate.profile');
    Route::get('candidate/applications','candidateApplications')->name('home.candidate.applications');
    Route::get('candidate/earnings','candidateEarnings')->name('home.candidate.earnings');
    Route::get('candidate/password/change','candidatePasswordChange')->name('home.candidate.change_password');

    Route::prefix('employer')->group(function(){
        Route::get('candidates','employerCandidates')->name('home.employer.candidates');
        Route::get('profile','employerProfile')->name('home.employer.profile');
        Route::get('post','employerPost')->name('home.employer.dashboard.post');
        Route::get('index','employerIndex')->name('home.employer.dashboard.index');
        Route::get('profile/edit','employerEditProfile')->name('home.employer.dashboard.profile');
        Route::get('applications','employerApplications')->name('home.employer.dashboard.applications');
        Route::get('password/change','employerPasswordChange')->name('home.employer.dashboard.change_password');
    });
});