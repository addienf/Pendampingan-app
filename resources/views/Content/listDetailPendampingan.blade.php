@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card table-card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Data Detail Pendampingan</div>
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
                @if (Auth::user()->level == 'admin')
                    <div class="btn-add">
                        <a href="{{ 'addDt/' . $pendampingan->id }}" class="btn btn-primary col-12 my-3">Tambah Data
                            Pendampingan</a>
                    </div>
                @endif
                <div class="card w-100 mt-3">
                    <table class="table align-middle text-center stripe hover" id="myTable">
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
                            @foreach ($detail_pendampingan as $list)
                                <tr>

                                    <td>{{ $list['id'] }}</td>
                                    <td>{{ $list['nama_aplikasi'] }}</td>
                                    <td>{{ $list['tanggal'] }}</td>
                                    <td>{{ $list['deskripsi'] }}</td>
                                    <td>{{ $list['keterangan'] }}</td>
                                    <td>{{ $list['upload_file'] }}</td>
                                    <td>
                                        <form action="{{ url('listDetail', $list->deskripsi) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            @if (Auth::user()->level == 'admin')
                                                <a href="{{ url('detailAplikasi/' . $list->id_pendampingan . '/' . $list->deskripsi . '/' . $list->id) }}"
                                                    class="btn btn-light"><i class="fa-solid fa-eye mx-2"></i></a>
                                                <button type="submit" onclick="return confirm('Are you sure?')"
                                                    class="btn btn-light"><i class="fa-solid fa-trash mx-2"></i></button>
                                            @else
                                                <a href="{{ url('detailAplikasi/' . $list->id_pendampingan . '/' . $list->deskripsi . '/' . $list->id) }}"
                                                    class="btn btn-light"><i class="fa-solid fa-eye mx-2"></i></a>
                                            @endif
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
