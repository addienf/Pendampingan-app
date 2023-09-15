@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card h-100">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Detail Aplikasi</div>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <div class="btn-kanan">
                            <a class="btn" href="/logout" role="button">Sign Out</a>
                            <a href="{{ url('editUser/' . Auth::user()->id) }}" class="btn btn-light"><i
                                    class="fa-solid fa-user mx-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card table-card mt-2">
                    <div class="card-body">
                        <form action="" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <input type="hidden" name="_method" value="PATCH">
                            <h5>Detail Aplikasi</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Nama Aplikasi</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->nama_aplikasi }}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Tanggal Pendampingan</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $detail_pendampingan->tanggal }}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Pemilik Perangkat Daerah</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->id_perangkat_daerah }}" disabled>
                            </div>
                            <div class="row g-2">
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text" id="basic-addon3">Penanggung Jawab</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" value="{{ $pendampingan->pic }}" disabled>
                                </div>
                                <div class="input-group mb-3 col-md-6">
                                    <span class="input-group-text" id="basic-addon3">Nomor Telepon</span>
                                    <input type="text" class="form-control" id="basic-url"
                                        aria-describedby="basic-addon3" value="{{ $pendampingan->no_telp }}" disabled>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Status Aplikasi</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->status_aplikasi }}" disabled>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon3">Status Rekomendasi</span>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                    value="{{ $pendampingan->status_rekomendasi }}" disabled>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label for="floatingInput">Deskripsi</label>
                                    <textarea type="text" class="form-control mt-2" name="deskripsi" disabled>{{ $detail_pendampingan->deskripsi }}</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="floatingInput">Keterangan</label>
                                    <textarea type="text" class="form-control mt-2" name="deskripsi" disabled>{{ $detail_pendampingan->keterangan }}</textarea>

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
