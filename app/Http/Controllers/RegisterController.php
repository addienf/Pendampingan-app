<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'min:5|required',
            'level' => 'required',
            'g-recaptcha-response' => 'required'
        ];
        $this->validate($request, $rules, [
            'name.required' => 'Name is required',
            'username.required' => 'Username is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'password.min' => 'Password should be minimum 5 length',
            'level.required' => 'Please select a valid role',
            'g-recaptcha-response.required' => 'Please complete reCaptcha',
        ]);

        $input = $request->all();
        $password = bcrypt($request->input('password'));
        $input['password'] = "$password";

        User::create($input);
        return redirect('/list');
    }
}
