<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $cred = $request->validate([
            'email' => 'required',
            'password' => '',
        ]);

        if (Auth::attempt($cred)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with(
            'loginError',
            'oops, sepertinya ada yang salah di username atau password kamu',
            // dd($cred),
        );
    }

    public function logout(Request $request)
    {

        // dd('hai');
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
