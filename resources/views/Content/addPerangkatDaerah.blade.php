@extends('Layout.layout')
@section('content')
    <div class="container w-50 mt-5">
        <h1>Add Perangkat Daerah</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('add') }}">Tambah Data</a></li>
            </ol>
        </nav>
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
    <div class="container w-50 mt-5">
        <table class="table align-middle text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perangkat Daerah</th>
                </tr>
            </thead>
            <tbody>
                <input type="text" class="d-none" value="{{ $current_date = date('Y-m-d') }}">
                @foreach ($data as $list)
                    <tr>
                        <td>{{ $list->id }}</td>
                        <td>{{ $list->nama_perangkat_daerah }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
