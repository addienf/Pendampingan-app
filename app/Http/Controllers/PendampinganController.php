<?php

namespace App\Http\Controllers;

use App\Models\Pendampingan;
use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;

class PendampinganController extends Controller
{
    //
    public function index()
    {
        $data['pendampingan'] = Pendampingan::join('perangkat_daerah', 'pendampingan.id_perangkat_daerah', '=', 'perangkat_daerah.id_perangkat_daerah')
            ->select('pendampingan.*', 'perangkat_daerah.nama_perangkat_daerah')
            ->get();
        $data2['perangkat_daerah'] = PerangkatDaerah::all();
        return view('Content.homePage', $data, $data2);
    }
    public function create()
    {
        $data['perangkat_daerah'] = PerangkatDaerah::all();
        return view('Content.addPendampingan', $data);
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
        $data2['perangkat_daerah'] = PerangkatDaerah::all();
        return view('Content.editPendampingan', $data, $data2);
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
