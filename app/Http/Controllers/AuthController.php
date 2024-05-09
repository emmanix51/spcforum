<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Thread;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }
    public function store()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'course' => 'required',
            'yearlevel' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'course' => $validated['course'],
            'yearlevel' => $validated['yearlevel'],
            'password' => Hash::make($validated['password'])
        ]);

        return redirect()->route('dashboard')->with('success', 'User registered Successfully');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate()
    {
        $validated = request()->validate([

            'email' => 'required|email',
            'password' => 'required|min:6' //form input dapat naay _confirmation ang name na ganahan iconfirm
        ]);

        if (auth()->attempt($validated)) {
            request()->session()->regenerate(); //clearing session in case naay session from previously logged in user 
            return redirect()->route('dashboard')->with('success', 'Logged in successfully');
        }
        return redirect()->route('login')->withErrors([
            'email' => "Invalid Email or password"
        ]);
    }

    public function logout()
    {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('dashboard')->with('success', 'Logged out successfully');
    }
}
