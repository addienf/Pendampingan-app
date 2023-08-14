<?php

namespace App\Http\Controllers;

use App\Models\DetailPendampingan;
use App\Models\Pendampingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store1(Request $request)
    {
        $requestData = $request->all();
        $filename = time() . $request->file('upload_file')->getClientOriginalName();
        $path = $request->file('upload_file')->storeAs('images', $filename, 'public');
        $requestData["upload_file"] = '/storage/' . $path;
        DetailPendampingan::create($requestData);
        return redirect('list');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'upload_file' => 'required',
            'upload_file.*' => 'required|mimes:doc,docx,xlsx,xls,pdf,zip,png,bmp,jpg|max:2048',
        ]);

        if ($request->upload_file) {
            foreach ($request->upload_file as $file) {

                $fileName = $file->getClientOriginalName();
                $filePath = 'uploads/' . $fileName;

                $path = Storage::disk('public')->put($filePath, file_get_contents($file));
                $path = Storage::disk('public')->url($path);

                // // Create files
                DetailPendampingan::create([
                    'id_pendampingan' => $request->id_pendampingan,
                    'tanggal' => $request->tanggal,
                    'deskripsi' => $request->deskripsi,
                    'keterangan' => $request->keterangan,
                    'upload_file' => $fileName
                ]);
            }
        }
        return redirect('list');
    }
}
