@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Add Perangkat Daerah</div>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <a class="btn" href="logout" role="button">Sign Out</a>
                    </div>
                </div>
                <div class="card table-card mt-2">
                    <form action="addPD" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="floatingInput">ID Perangkat Daerah</label>
                            <input type="text" class="form-control mt-2" name="id_perangkat_daerah">
                        </div>
                        <div class="mb-3">
                            <label for="floatingInput">Nama Perangkat Daerah</label>
                            <input type="text" class="form-control mt-2" name="nama_perangkat_daerah">
                        </div>
                        <button type="submit" class="btn btn-primary col-12 mt-2">Submit</button>
                    </form>
                </div>
                <div class="card table-card mt-2">
                    <table class="table align-middle text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perangkat Daerah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $list)
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td>{{ $list->nama_perangkat_daerah }}</td>
                                    <td>
                                        <form action="{{ url('listPD', $list->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href="{{ 'editPD/' . $list->id }}" class="btn btn-light"><i
                                                    class="fa-solid fa-pen mx-2"></i></a>
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
