@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Add Detail Pendampingan</div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('add') }}">Tambah Data</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('listPD') }}">Perangkat Daerah</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('listDetail') }}">Detail Pendampingan</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <a class="btn" href="logout" role="button">Sign Out</a>
                    </div>
                </div>
                <div class="card table-card mt-2">
                    <form action="addDt" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="floatingInput">ID Pendampingan</label>
                            <input type="text" class="form-control mt-2 @error('id_pendampingan') is-invalid @enderror"
                                name="id_pendampingan" value="{{ $pendampingan->id }}">
                            @error('id_pendampingan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Harap Isi Tanggal Pendampingan</label>
                            <input type="date" class="form-control mt-2 @error('tanggal') is-invalid @enderror"
                                name="tanggal">
                            @error('tanggal')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row g-2">
                            <div class="col-md-6">
                                <label for="floatingInput">Isi Deskripsi</label>
                                <textarea type="text" class="form-control mt-2 @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="floatingInput">Upload File Pendukung</label>
                                <input type="file" class="form-control mt-2 @error('upload_file[]') is-invalid @enderror"
                                    name="upload_file[]" multiple="true">
                                @error('upload_file[]')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-md-12 mb-3">
                                <label for="floatingInput">Isi Keterangan</label>
                                <textarea type="text" class="form-control mt-2 @error('keterangan') is-invalid @enderror" name="keterangan"></textarea>
                                @error('keterangan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
