@extends('Layout.layout')
@section('content')
    <div class="container w-75 mt-5">
        <h1>Selamat Datang {{ Auth::user()->name }} ! <a class="btn btn-primary" href="logout" role="button">Logout</a> </h1>
        <div class="container w-100 mt-2">
            <h1>Data Aplikasi</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('listPD') }}">Perangkat Daerah</a></li>
                </ol>
            </nav>
            <a href="{{ url('add') }}" class="btn btn-primary col-12 my-3">Tambah Data Aplikasi</a>
            <table class="table align-middle text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Aplikasi</th>
                        <th>Perangkat Daerah</th>
                        <th>Status Aplikasi</th>
                        <th>Status Rekomendasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <input type="text" class="d-none" value="{{ $current_date = date('Y-m-d') }}">
                    @foreach ($pendampingan as $list)
                        <tr>
                            <td>{{ $list['id'] }}</td>
                            <td><a href="{{ 'detailAplikasi/' . $list->id }}">{{ $list['nama_aplikasi'] }}</a></td>
                            <td>{{ $list['nama_perangkat_daerah'] }}</td>
                            <td>{{ $list['status_aplikasi'] }}</td>
                            <td>{{ $list['status_rekomendasi'] }}</td>
                            <td>
                                <form action="{{ url('list', $list->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <a href="{{ 'edit/' . $list->id }}" class="btn btn-light"><i
                                            class="fa-solid fa-pen mx-2"></i></a>
                                    <a href="{{ 'listDetail/' . $list->id }}" class="btn btn-light"><i
                                            class="fa-solid fa-eye mx-2"></i></a>
                                    <button type="submit" onclick="return confirm('Are you sure?')"
                                        class="btn btn-light"><i class="fa-solid fa-trash mx-2"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
