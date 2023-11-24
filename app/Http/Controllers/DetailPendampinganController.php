<?php

namespace App\Http\Controllers;

use App\Models\DetailPendampingan;
use App\Models\Pendampingan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $uniqueData['detail_pendampingan'] = $data['detail_pendampingan']->unique('keterangan');
        $data2['pendampingan'] = Pendampingan::find($id);
        return view('Content.listDetailPendampingan', $uniqueData, $data2);
    }

    public function create($id)
    {
        $data['detail_pendampingan'] = DetailPendampingan::all();
        $data2['pendampingan'] = Pendampingan::find($id);
        return view('Content.addDetailPendampingan', $data, $data2);
    }

    public function store(Request $request)
    {
        $rules = [
            'id_pendampingan' => 'required',
            'tanggal' => 'required',
            'deskripsi' => 'required',
            'upload_file[]' => 'required',
            'keterangan' => 'required'
        ];
        $this->validate($request, $rules, [
            'id_pendampingan.required' => 'Id Pendampingan is required',
            'tanggal.required' => 'Tanggal is required',
            'deskripsi.required' => 'Deskripsi is required',
            'upload_file[].required' => 'Please insert file',
            'keterangan.required' => 'Keterangan is required',
        ]);
        $input = $request->all();
        DetailPendampingan::create($input);
        session()->flash('success', 'Data telah berhasil disimpan.');
        return redirect('list');
    }

    public function edit($id, $desc, $id2)
    {
        $pendampingan = Pendampingan::find($id);
        $detail_pendampingan = DetailPendampingan::find($id2);
        $desc1 = DetailPendampingan::where('deskripsi', $desc)->get();
        $dt = $desc1->pluck('upload_file')->implode(', ');
        $dtArray = explode(', ', $dt);
        return view('Content.DetailPendampingan', compact('pendampingan', 'detail_pendampingan', 'dtArray'));
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

    public function homeDetail($id)
    {
        $data['pendampingan'] = Pendampingan::find($id);
        $id2 = DB::table('detail_pendampingan')
            ->where('id_pendampingan', $id)
            ->latest('created_at')
            ->value('id');

        $data2['detail_pendampingan'] = DetailPendampingan::find($id2);

        if (!$data2['detail_pendampingan']) {
            return view('Content.Detail2');
        } else {
            return view('Content.Detail', $data, $data2);
        }
    }
    public function download($filename)
    {
        $pathToFile = storage_path('app\public\uploads/' . $filename);
        return Response()->download($pathToFile);
    }

    public function destroy($desc)
    {
        $detail = DetailPendampingan::where('deskripsi', $desc)->delete();
        // if ($detail) {
        //     Storage::delete($detail->upload_file);
        // }
        return redirect('list');
    }
}
