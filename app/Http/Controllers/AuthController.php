<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session('')->regenerate();

            if (Auth::user()->level == 'admin') {
                return redirect()->intended('list');
            } elseif (Auth::user()->level == 'user') {
                return redirect()->intended('list');
            }
        }

        return back()->withErrors([
            'username' => 'The provide credentials do not match our records.',
        ])->onlyInput('username');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
