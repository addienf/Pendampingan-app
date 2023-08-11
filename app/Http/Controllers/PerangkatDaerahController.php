<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;

class PerangkatDaerahController extends Controller
{
    //
    public function index()
    {
        $data = PerangkatDaerah::all();
        return view('Content.addPerangkatDaerah', compact('data'));
    }
    public function create()
    {
        return view('Content.addPerangkatDaerah');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        PerangkatDaerah::create($input);
        return redirect('listPD');
    }


    // public function edit($id)
    // {
    //     $data['PerangkatDaerah'] = PerangkatDaerah::find($id);
    //     $data2['perangkatDaerah'] = PerangkatDaerah::all();
    //     return view('Content.editPerangkatDaerah', $data, $data2);
    // }

    // public function update($id, Request $request)
    // {
    //     $input = $request->all();
    //     PerangkatDaerah::find($id)->update($input);
    //     return redirect('list');
    // }

    // public function destroy($id)
    // {
    //     $pendampingan = Pendampingan::find($id);
    //     $pendampingan->delete();
    //     return redirect('list');
    // }
}
