@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Edit User</div>
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
                    <form action="{{ url('listUser', $user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3">
                            <label for="floatingInput">id</label>
                            <input type="text" class="form-control mt-2" name="nama_aplikasi"
                                value="{{ $user->id }}">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Nama</label>
                            <input type="text" class="form-control mt-2" name="nama_aplikasi"
                                value="{{ $user->name }}">
                        </div>
                        <div class="row g-2 mb-2">
                            <div class="col-md-8">
                                <label for="floatingInput">Email</label>
                                <input type="text" class="form-control mt-2" name="pic" value="{{ $user->email }}">
                            </div>
                            <div class="col-md-4">
                                <label for="floatingInput">Password</label>
                                <input type="text" class="form-control mt-2" name="no_telp" value="">
                            </div>
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
