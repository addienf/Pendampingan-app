<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function postLogin(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'min:5|required',
            'g-recaptcha-response' => 'required'
        ];
        $this->validate($request, $rules, [
            'username.required' => 'Username is required',
            'password.required' => 'Password is required',
            'password.min' => 'Password should be minimum 5 length',
            'g-recaptcha-response.required' => 'Please complete reCaptcha',
        ]);

        $credentials = $request->validate([
            'username' => 'required',
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
