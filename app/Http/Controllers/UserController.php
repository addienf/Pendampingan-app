<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $data = User::all();
        return view('Content.listUser', compact('data'));
    }
    public function create()
    {
        return view('Content.registerPage');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('register');
    }


    public function edit($id)
    {
        $data['user'] = User::find($id);
        return view('Content.editUser', $data);
    }

    // public function update($id, Request $request)
    // {
    //     $user = User::find($id);
    //     $rules = [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //         'password' => 'nullable|string|min:8|confirmed',
    //     ];

    //     $this->validate($request, $rules, [
    //         'name.required' => 'Nama harus diisi',
    //         'email.required' => 'Email harus diisi',
    //         'email.unique' => 'Email sudah digunakan',
    //         'password.min' => 'Kata Sandi minimal 8 karakter',
    //         'password.confirmed' => 'Kata Sandi dan Konfirmasi Kata Sandi tidak cocok',
    //     ]);
    //     $input = $request->all();
    //     User::find($id)->update($input);
    //     return redirect('listUser');
    // }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:5|confirmed',
        ];

        $this->validate($request, $rules, [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah digunakan',
            'password.min' => 'Kata Sandi minimal 5 karakter',
            'password.confirmed' => 'Kata Sandi dan Konfirmasi Kata Sandi tidak cocok',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        return redirect('list');
    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('listUser');
    }
}
