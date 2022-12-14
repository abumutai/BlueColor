<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function professionalRegister()
    {
        return view('auth.professional.register');
    }
    public function userRegister()
    {
        return view('auth.user.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'phone_number' => 'numeric|required|unique:users,phone|min:9'
        ]);
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone_number,
                'user_type' => $request->user_type,
            ]);
            if ($user) {
                Auth::login($user);
                if ($user->user_type == 1) {
                    return redirect()->route('professionals.dashboard');
                }
                return redirect()->route('users.dashboard');
            }
        } catch (Exception $e) {
            Log::critical($e);
            return redirect()->back()->with('exception', 'An unexpected error occurred. Please try again.')->withInput($request->input());
        }
    }
    public function usersLogin()
    {
        return view('auth.login');
    }
    public function adminLoginForm()
    {
        return view('auth.admin.login');
    }
    public function usersSubmitLogin(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::user()->user_type == 1) {
                    return redirect()->route('professionals.dashboard');
                } else if (Auth::user()->user_type == 0) {
                    return redirect()->route('home');
                } else {
                    return redirect()->route('users.dashboard');
                }
            }
            return redirect()->back()->with('exception','The provided credentials did not match our records')->onlyInput('email');
        } catch (Exception $e) {
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.')->onlyInput('email');
        }
    }
    public function adminSubmitLogin(Request $request)
    {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        try {
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if (Auth::user()->user_type == 0) {
                    return redirect()->route('home');
                } else{
                    Auth::logout();
                    return redirect()->route('users.login');
                }
            }
            return redirect()->back()->with('exception','The provided credentials did not match our records')->onlyInput('email');
        } catch (Exception $e) {
            return redirect()->back()->with('exception','An unexpected error occurred. Please try again.')->onlyInput('email');
        }
    }
    public function logout(Request $request)
    {
        if(Auth::user()->user_type==0)
        {
            Auth::logout();
            $request->session()->invalidate();
 
            $request->session()->regenerateToken();
            return redirect()->route('admin.login');
        }
        else{
            Auth::logout();
            $request->session()->invalidate();
 
            $request->session()->regenerateToken();
            return redirect()->route('users.login');
        }
    }
}
