<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {

            $user = Auth::user();
            session(['user_role' => $user->roles_id]);

            return redirect()->intended('dashboard')->with('success', 'Welcome');
        }

        return redirect('login')->with('success', 'Failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('login');
    }
}
