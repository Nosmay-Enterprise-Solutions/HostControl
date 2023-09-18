<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
            'status' => ['required']
        ]);

        if (Auth::attempt($task)) {
            $io->session()->regenerate();

            return redirect()->route('admin-dashboard');
        }

        return back()->withErrors([
            'email' => 'Credentials Mismatch. Try Again!',
            'status' => 'Account Disabled'
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

    public function create_user(Request $io): RedirectResponse
    {
        // dd($io);
        User::create([
            'lname' => $io->lname,
            'fname' => $io->fname,
            'gender' => $io->gender,
            'dob' => $io->dob,
            'email' => $io->email,
            'contact' => $io->contact,
            'status' => $io->status,
            'role' => $io->role,
            'password' => 'hashed'
        ]);
        return back();
    }

    public function forgotPassVerify(Request $io): RedirectResponse
    {
        $verify = User::where('email', $io->nemail)->get()->count();
        if($verify > 0){
            Mail::to($io->nemail)->send(new ForgotPassword());
            session(['fps-email' => $io->nemail]);
            return redirect()->route('auth-new-pass-sent');
        }
        return back()->withErrors([
            'email' => 'Credentials Mismatch. Try Again!'
        ])->onlyInput('nemail');
    }

    public function newPassSent()
    {
        if(empty(session('fps-email'))){
            return redirect()->route('auth-signin');
        }
        $email = session('fps-email');
        session()->forget('fps-email');

        return view('auth.new-password-sent')->with([
            'email' => $email
        ]);
    }
}
