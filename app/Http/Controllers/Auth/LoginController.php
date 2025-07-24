<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
//    protected $redirectTo = '/home';



//     //show login form
//    protected function authenticated(Request $request, $user)
// {
//     if ($user->is_admin) {
//         // Admin → admin.maps.index route
//         return redirect()->route('admin.maps.index');
//     }

//     // Normal user → home route
//     return redirect()->route('home');
// }
  

//   public function showLoginForm()
// {
//     return view('auth.login'); // Blade file path: resources/views/auth/login.blade.php
// }
//     // protected $redirectTo = '/';

//     /**
//      * Create a new controller instance.
//      *
//      * @return void

//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except('logout');
//         $this->middleware('auth')->only('logout');
//     }
//     public function logout(Request $request)
//     {
//         Auth::logout();

//         $request->session()->invalidate();
//         $request->session()->regenerateToken();

//         // ✅ Home Page ကို redirect
//         return redirect('/')->with('status', 'You have been logged out!');
//     }
// }
public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Login success
            if (Auth::user()->is_admin == 1) {
                // $paytments = \App\Models\Payment::where('status', 'pending')->get();
                $payments = \App\Models\Payment::latest()->get();
                $maps = \App\Models\Map::all();
                // dd("sad");
                // dd("hello");
                    // return redirect()->to('admin/maps',['payments' => $payments]); // Redirect to admin maps index
                return view('admin.maps.index', compact(['maps','payments']))->with('status', 'You are logged in as admin!');
                // Redirect admin to admin.maps.index route
                // return redirect()->route('admin.maps.index')->with('status', 'You are logged in as admin!');
            }
            // Redirect normal user to intended route or home
            return redirect()->intended('home')->with('status', 'You are logged in!');
        }

        // Login fail
        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }
}