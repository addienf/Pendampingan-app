@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Edit Pendampingan</div>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <a class="btn" href="logout" role="button">Sign Out</a>
                    </div>
                </div>
                <div class="card table-card mt-2">
                    <form action="{{ url('list', $pendampingan->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3">
                            <label for="floatingInput">Nama Aplikasi</label>
                            <input type="text" class="form-control mt-2" name="nama_aplikasi"
                                value="{{ $pendampingan->nama_aplikasi }}">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Perangkat Daerah</label>
                            <select name="id_perangkat_daerah" class="form-select">
                                @foreach ($perangkat_daerah as $pay)
                                    <option value="{{ $pay->id_perangkat_daerah }}">{{ $pay->nama_perangkat_daerah }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Status Aplikasi</label>
                            <select name="status_aplikasi" class="form-select" required>
                                <option value="">{{ $pendampingan->status_aplikasi }}</option>
                                <option value="Pengembangan">Pengembangan</option>
                                <option value="Perbaikan">Perbaikan</option>
                                <option value="Baru">Baru</option>
                            </select>
                        </div>
                        <div class="input-field mb-3">
                            <label for="status_rekomendasi">Status Rekomendasi</label>
                            <select name="status_rekomendasi" class="form-select" required>
                                <option value="">{{ $pendampingan->status_rekomendasi }}</option>
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                                <option value="Proses">Proses</option>
                            </select>
                        </div>
                        <div class="row g-2 mb-2">
                            <div class="col-md-8">
                                <label for="floatingInput">Penanggung Jawab</label>
                                <input type="text" class="form-control mt-2" name="pic"
                                    value="{{ $pendampingan->pic }}">
                            </div>
                            <div class="col-md-4">
                                <label for="floatingInput">No Telpon</label>
                                <input type="text" class="form-control mt-2" name="no_telp"
                                    value="{{ $pendampingan->no_telp }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Spesifikasi</label>
                            <textarea type="text" class="form-control mt-2" name="spesifikasi">{{ $pendampingan->spesifikasi }}</textarea>
                        </div>
                        <div class="d-grid gap-2 d-md-block">
                            <button type="submit" class="btn btn-primary col-12 mt-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
