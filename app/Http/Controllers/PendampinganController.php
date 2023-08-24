<?php

namespace App\Http\Controllers;

use App\Models\DetailPendampingan;
use App\Models\Pendampingan;
use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendampinganController extends Controller
{
    //
    public function index()
    {
        // $id2 = DB::table('detail_pendampingan')->latest('created_at')->first();
        // $data['pendampingan'] = Pendampingan::join('perangkat_daerah', 'pendampingan.id_perangkat_daerah', '=', 'perangkat_daerah.id_perangkat_daerah')
        //     ->join('detail_pendampingan', 'detail_pendampingan.id_pendampingan', '=', 'pendampingan.id')
        //     ->select('pendampingan.*', 'perangkat_daerah.nama_perangkat_daerah', 'detail_pendampingan.tanggal')
        //     ->where('detail_pendampingan.tanggal', $id2->tanggal)
        //     ->orderBy('pendampingan.id', 'asc')
        //     ->get();
        $data['pendampingan'] = Pendampingan::join('perangkat_daerah', 'pendampingan.id_perangkat_daerah', '=', 'perangkat_daerah.id_perangkat_daerah')
            ->select('pendampingan.*', 'perangkat_daerah.nama_perangkat_daerah')
            ->orderBy('pendampingan.id', 'asc')
            ->get();
        return view('Content.homePage', $data);
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
