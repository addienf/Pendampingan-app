@extends('Layout.layout')
@section('content')
    <div class="container w-75 mt-5">
        <h1>Selamat Datang {{ Auth::user()->name }} ! <a class="btn btn-primary" href="logout" role="button">Logout</a> </h1>
        <div class="container w-100 mt-2">
            <h1>Data Detail Pendampingan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('add') }}">Tambah Data</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('listPD') }}">Perangkat Daerah</a></li>
                </ol>
            </nav>
            <table class="table align-middle text-center">
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
                                    <a href="{{ url('dt') }}" class="btn btn-light"><i
                                            class="fa-solid fa-eye mx-2"></i></a>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
