<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function signin()
    {
        return view('dashboard.auth.signin');
    }
    public function signup()
    {
        return view('dashboard.auth.signup');
    }

    public function userSignin(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin-dashboard')->with('success', 'Signed in successfully.');
        }

        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }
    public function register(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:7|confirmed',
            'authCode' => 'required',
        ]);
        if ($request->authCode == 'shireAuth#'){
            try {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $request->password; // hash password
                $user->role = 'admin';
                $user->save();

                return redirect()->route('login')->with('success', 'Registration successful. Please sign in.');
            } catch (\Exception $e) {
                return redirect()
                    ->back()
                    ->withErrors(['error' => 'Registration failed. Please try again.']);
            }
        }
        else{
            return redirect()
                ->back()
                ->withErrors(['error' => 'Invalid authentication code.']);
        }

        // return redirect()->route('signin')->with('success', 'Registration successful. Please sign in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully.');
    }
}
