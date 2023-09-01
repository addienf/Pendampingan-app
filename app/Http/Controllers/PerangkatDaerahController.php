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
}
