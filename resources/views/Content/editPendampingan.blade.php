@extends('Layout.layout')
@section('content')
    {{-- @include('Component.sidebar') --}}
    {{-- <div class="cardSidebar"> --}}
    <div class="container w-50 mt-5">
        <h1>Edit Pendampingan Page</h1>
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
                {{-- <input type="text" class="form-control mt-2" name="perangkat_daerah"
                    value="{{ $pendampingan->perangkat_daerah }}"> --}}
                <select name="id_perangkat_daerah" class="form-select">
                    @foreach ($perangkat_daerah as $pay)
                        <option value="{{ $pay->id_perangkat_daerah }}">{{ $pay->nama_perangkat_daerah }}</option>
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
                    <input type="text" class="form-control mt-2" name="pic" value="{{ $pendampingan->pic }}">
                </div>
                <div class="col-md-4">
                    <label for="floatingInput">No Telpon</label>
                    <input type="text" class="form-control mt-2" name="no_telp" value="{{ $pendampingan->no_telp }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="floatingInput">Spesifikasi</label>
                <textarea type="text" class="form-control mt-2" name="spesifikasi">{{ $pendampingan->spesifikasi }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ url('list') }}" class="btn btn-primary">Home</a>
        </form>
        {{-- </div>
    </div> --}}
    @endsection
