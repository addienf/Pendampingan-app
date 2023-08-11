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
        $data2['pendampingan'] = Pendampingan::all();
        return view('Content.listDetailPendampingan', $data, $data2);
    }
}
