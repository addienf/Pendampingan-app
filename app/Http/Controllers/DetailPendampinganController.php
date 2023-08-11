<?php

namespace App\Http\Controllers;

use App\Models\DetailPendampingan;
use App\Models\Pendampingan;
use App\Models\PerangkatDaerah;
use Illuminate\Http\Request;

class DetailPendampinganController extends Controller
{
    //
    public function index()
    {
        $data['detail_pendampingan'] = DetailPendampingan::join('pendampingan', 'detail_pendampingan.id_pendampingan', '=', 'pendampingan.id')
            ->select('detail_pendampingan.*', 'pendampingan.nama_aplikasi')
            ->get();
        $data2['pendampingan'] = Pendampingan::all();
        return view('Content.listDetailPendampingan', $data, $data2);
    }
    public function detailbyID($id)
    {
        $data['detail_pendampingan'] = DetailPendampingan::join('pendampingan', 'detail_pendampingan.id_pendampingan', '=', 'pendampingan.id')
            ->select('detail_pendampingan.*', 'pendampingan.nama_aplikasi')
            ->where('pendampingan.id', $id)
            ->get();
        $data2['pendampingan'] = Pendampingan::find($id);
        return view('Content.listDetailPendampingan', $data, $data2);
    }

    public function create($id)
    {
        $data['detail_pendampingan'] = DetailPendampingan::all();
        $data2['pendampingan'] = Pendampingan::find($id);
        return view('Content.addDetailPendampingan', $data, $data2);
    }

    public function store(Request $request)
    {
        $input = $request->all();
        DetailPendampingan::create($input);
        return redirect('list');
    }

    public function edit($id, $id2)
    {
        $data['pendampingan'] = Pendampingan::find($id);
        $data2['detail_pendampingan'] = DetailPendampingan::find($id2);
        return view('Content.DetailPendampingan', $data, $data2);
    }
}
