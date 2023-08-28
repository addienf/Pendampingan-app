@extends('Layout.layout')
@section('content')
<div class="body">
    <div class="container">
            <div class="h1 header-kanan justify-content-md-end mr-3">Selamat Datang {{ Auth::user()->name }} ! 
                <a class="fa-solid fa-user btn mb-2" href="logout" role="button"></a>
            </div>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('add') }}">Tambah Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('listPD') }}">Perangkat Daerah</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('listDetail') }}">Detail Pendampingan</a></li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_method" value="PATCH">
                        <h5>Detail Aplikasi</h5>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Nama Aplikasi</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $pendampingan->nama_aplikasi }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Tanggal Pendampingan</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $detail_pendampingan->tanggal }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Pemilik Perangkat Daerah</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $pendampingan->id_perangkat_daerah }}">
                        </div>
                        <div class="row g-2">
                            <div class="input-group mb-3 col-md-6">
                                <span class="input-group-text" id="basic-addon3">Penanggung Jawab</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->pic }}">
                            </div>
                            <div class="input-group mb-3 col-md-6">
                                <span class="input-group-text" id="basic-addon3">Nomor Telepon</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->no_telp }}">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Status Aplikasi</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $pendampingan->status_aplikasi }}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Status Rekomendasi</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $pendampingan->status_rekomendasi }}">
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="floatingInput">Deskripsi</label>
                                <textarea type="text" class="form-control mt-2" name="deskripsi">{{ $detail_pendampingan->deskripsi }}</textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Keterangan</label>
                                <textarea type="text" class="form-control mt-2" name="deskripsi">{{ $detail_pendampingan->keterangan }}</textarea>
                                
                            </div>
                        </div>
                        <a href="{{ url('list') }}" class="btn btn-primary mt-3">Kembali</a>
                     </form>
                    </div>
                
                 </div>
             </div>
         </div>
    </div>
@endsection
