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
                        <div class="d-flex align-items-center justify-content-center text-center">
                            <h1>Data Belum Tersedia!</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
