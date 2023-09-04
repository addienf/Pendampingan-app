@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Edit Perangkat Daerah</div>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <a class="btn" href="logout" role="button">Sign Out</a>
                    </div>
                </div>
                <div class="card table-card mt-2">
                    <form action="{{ url('listPD', $perangkat_daerah->id_perangkat_daerah) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3 d-none">
                            <label for="floatingInput">ID</label>
                            <input type="text" class="form-control mt-2" name="id"
                                value="{{ $perangkat_daerah->id }}" disabled>
                        </div>
                        <div class="mb-3 d-none">
                            <label for="floatingInput">ID Perangkat Daerah</label>
                            <input type="text" class="form-control mt-2" name="id_perangkat_daerah"
                                value="{{ $perangkat_daerah->id_perangkat_daerah }}">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Nama Perangkat Daerah</label>
                            <input type="text" class="form-control mt-2" name="nama_perangkat_daerah"
                                value="{{ $perangkat_daerah->nama_perangkat_daerah }}">
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
