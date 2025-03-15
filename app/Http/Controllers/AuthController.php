<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyAccount;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    // String Generator
    function geneString($length = 30) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

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
            // 'status' => ['required']
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

        return redirect()->route('login');
    }

    public function create_user(Request $io): RedirectResponse
    {
        // dd($io);
        $token = substr(str_shuffle(str_repeat($x='01', ceil(64/strlen($x)) )),1,64);
        User::create([
            'lname' => $io->lname,
            'fname' => $io->fname,
            'gender' => $io->gender,
            'dob' => $io->dob,
            'email' => $io->email,
            'contact' => $io->contact,
            'status' => $io->status,
            'role' => $io->role,
            'password' => 'hashed',
            'token' => $token
        ]);
        $data = [
            'name' => $io->fname,
            'email' => $io->email,
            'link' => route('auth-verify-request').'?bin=0011&token='.$token
        ];
        // Send Verification Email
        Mail::to($io->email)->send(new VerifyAccount($data));

        return back();
    }

    public function forgotPassVerify(Request $io): RedirectResponse
    {
        $verify = User::where('email', $io->nemail)->get();
        if(count($verify) > 0){
            $token = substr(str_shuffle(str_repeat($x='01', ceil(64/strlen($x)) )),1,64);
            User::where('email', $io->nemail)->update(['token' => $token]);
            $pass = [
                'name' => $verify->first()->fname,
                'link' => route('auth-verify-request').'?bin=0010&token='.$token
            ];
            Mail::to($io->nemail)->send(new ForgotPassword($pass));
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

    public function verifyRequest()
    {
        return '';
    }
}
