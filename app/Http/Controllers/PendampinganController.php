<?php

namespace App\Http\Controllers;

use App\Models\Pendampingan;
use Illuminate\Http\Request;

class PendampinganController extends Controller
{
    //
    public function index()
    {
        $data['pendampingan'] = Pendampingan::all();
        return view('Content.homePage', $data);
    }
    public function create()
    {
        return view('Content.addPendampingan');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Pendampingan::create($input);
        return redirect('list');
    }


    public function edit($id)
    {
        $data['pendampingan'] = Pendampingan::find($id);
        return view('Content.editPendampingan', $data);
    }

    public function update($id, Request $request)
    {
        $input = $request->all();
        Pendampingan::find($id)->update($input);
        return redirect('list');
    }

    public function destroy($id)
    {
        $pendampingan = Pendampingan::find($id);
        $pendampingan->delete();
        return redirect('list');
    }
}
