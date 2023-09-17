<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Sign In
    public function signIn() {
        return view('auth.signin');
    }

    // Sign Up
    public function signUp() {

    }

    // Authenticate User
    public function authenticate(Request $io): RedirectResponse
    {
        $task = $io->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($task)) {
            $io->session()->regenerate();

            return redirect()->route('admin-dashboard');
        }

        return back()->withErrors([
            'email' => 'Credentials Mismatch. Try Again!',
        ])->onlyInput('email');
    }

    public function forgotPassword() {
        return view('auth.forgot-password');
    }

    public function dismiss(Request $io): RedirectResponse
    {
        Auth::logout();

        $io->session()->invalidate();
        $io->session()->regenerateToken();

        return redirect()->route('auth-signin');
    }
}
