@extends('Layout.layout')
@section('content')
    {{-- @include('Component.sidebar') --}}
    <div class="cardSidebar">
        <div class="container w-50 mt-3">
            <h1>Add Pendampingan Page</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('add') }}">Tambah Data</a></li>
                </ol>
            </nav>
            <form action="add" method="post">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="floatingInput">Nama Aplikasi</label>
                    <input type="text" class="form-control mt-2" name="nama_aplikasi">
                </div>
                <div class="mb-3">
                    <label for="floatingInput">Perangkat Daerah</label>
                    <select name="id_perangkat_daerah" class="form-select">
                        @foreach ($perangkat_daerah as $pay)
                            <option value="{{ $pay->id_perangkat_daerah }}">{{ $pay->nama_perangkat_daerah }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="mb-2">Status Aplikasi</label>
                    <select name="status_aplikasi" class="form-select" required>
                        <option value="Pengembangan">Pengembangan</option>
                        <option value="Perbaikan">Perbaikan</option>
                        <option value="Baru">Baru</option>
                    </select>
                </div>
                <div class="input-field mb-2">
                    <label class="mb-3">Status Rekomendasi</label>
                    <select name="status_rekomendasi" class="form-select" required>
                        <option value="Sudah">Sudah</option>
                        <option value="Belum">Belum</option>
                        <option value="Proses">Proses</option>
                    </select>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-8">
                        <label for="floatingInput">Penanggung Jawab</label>
                        <input type="text" class="form-control mt-2" name="pic">
                    </div>
                    <div class="col-md-4">
                        <label for="floatingInput">No Telpon</label>
                        <input type="text" class="form-control mt-2" name="no_telp">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="floatingInput">Spesifikasi</label>
                    <textarea type="text" class="form-control mt-2" name="spesifikasi"></textarea>
                </div>
                <button type="submit" class="btn btn-primary col-12 mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection
