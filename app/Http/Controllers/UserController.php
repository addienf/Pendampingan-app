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

    public function update($id, Request $request)
    {
        $input = $request->all();
        User::find($id)->update($input);
        return redirect('listUser');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('listUser');
    }
}
