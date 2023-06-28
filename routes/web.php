<?php

use App\Http\Controllers\AdminServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceSubCategoryController;
use App\Models\ServiceCategory;

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

Route::get('/test',function(){ return view('admin.bookings.index'); });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(IndexController::class)->group(function () {
    Route::get('jobs', 'jobs')->name('home.jobs');
    Route::get('about', 'about')->name('home.about');
    Route::get('contact', 'contact')->name('home.contact');
    Route::get('candidate/dashboard', 'candidateDashboard')->name('home.candidate.dashboard');
    Route::get('candidate/profile', 'candidateProfile')->name('home.candidate.profile');
    Route::get('candidate/applications', 'candidateApplications')->name('home.candidate.applications');
    Route::get('candidate/earnings', 'candidateEarnings')->name('home.candidate.earnings');
    Route::get('candidate/password/change', 'candidatePasswordChange')->name('home.candidate.change_password');

    Route::prefix('employer')->group(function () {
        Route::get('candidates', 'employerCandidates')->name('home.employer.candidates');
        Route::get('profile', 'employerProfile')->name('home.employer.profile');
        Route::get('post', 'employerPost')->name('home.employer.dashboard.post');
        Route::get('index', 'employerIndex')->name('home.employer.dashboard.index');
        Route::get('profile/edit', 'employerEditProfile')->name('home.employer.dashboard.profile');
        Route::get('applications', 'employerApplications')->name('home.employer.dashboard.applications');
        Route::get('password/change', 'employerPasswordChange')->name('home.employer.dashboard.change_password');
    });
});

Route::controller(AuthController::class)->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('login', 'adminLoginForm')->name('admin.login');
        Route::post('login', 'adminSubmitLogin')->name('admin.login.submit');
    });
    Route::prefix('professional')->group(function () {
        Route::get('register', 'professionalRegister')->name('professional.register');
    });
    Route::prefix('user')->group(function () {
        Route::get('register', 'userRegister')->name('user.register');
        Route::get('choosesignup',function(){return view('auth.choosesignup');})->name('choosesignup');
    });
    Route::prefix('users')->group(function () {
        Route::post('register', 'register')->name('users.register');
        Route::get('login', 'usersLogin')->name('users.login');
        Route::post('login', 'usersSubmitLogin')->name('users.login.submit');
    });
    Route::post('logout', 'logout')->name('logout');
});

Route::prefix('professional')->group(function () {
    Route::controller(ProfessionalController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('professionals.dashboard');
        Route::get('services', 'services')->name('professionals.services');
        Route::get('bookings','bookings')->name('professional.bookings');
    });
    Route::resource('services',ServiceController::class);
});
Route::controller(UserController::class)->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('dashboard', 'dashboard')->name('users.dashboard');
    });
});

Route::prefix('admin')->group(function(){
    Route::resource('service-categories',ServiceCategoryController::class);
    Route::resource('service-subcategories',ServiceSubCategoryController::class);

    Route::resource('counties',CountyController::class);
    Route::resource('cities',CityController::class);

    Route::resource('admin-services',AdminServiceController::class);

    Route::resource('admin-bookings',BookingController::class);
});