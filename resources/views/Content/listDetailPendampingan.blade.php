@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            {{-- <div class="card"> --}}
                <div class  = "header-kanan justify-content-md-end mr-3 ">
                    <div class="h1">Selamat Datang {{ Auth::user()->name }} ! 
                    </div>
                    <a class="fa-solid fa-user btn mb-2" href="logout" role="button"></a>
                </div>
                    <div class="card table-card">
                    <table class="table align-middle text-center">
                            <div class = "h1"  >Data Detail Pendampingan</div>
                                <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                        </ol>
                    </nav>
                    <a href="{{ 'addDt/' . $pendampingan->id }}" class="btn btn-primary col-3 mp-3 mb-3 mx3">Tambah Data
                        Pendampingan</a>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Aplikasi</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>keterangan</th>
                                <th>Upload File</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <input type="text" class="d-none" value="{{ $current_date = date('Y-m-d') }}">
                            @foreach ($detail_pendampingan as $list)
                                <tr>

                                    <td>{{ $list['id'] }}</td>
                                    <td>{{ $list['nama_aplikasi'] }}</td>
                                    <td>{{ $list['tanggal'] }}</td>
                                    <td>{{ $list['deskripsi'] }}</td>
                                    <td>{{ $list['keterangan'] }}</td>
                                    <td>{{ $list['upload_file'] }}</td>
                                    <td>
                                        <form action="{{ url('list', $list->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href="{{ url('detailAplikasi/' . $list->id_pendampingan . '/' . $list->id) }}"
                                                class="btn btn-light"><i class="fa-solid fa-eye mx-2"></i></a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
