@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card table-card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Data User</div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('list') }}">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="header-kanan">
                        <div class="h1">Selamat Datang {{ Auth::user()->name }} !
                        </div>
                        <a class="btn" href="/logout" role="button">Sign Out</a>
                    </div>
                </div>
                <div class="btn-add">
                    <a href="{{ url('register') }}" class="btn btn-primary col-12 my-3">Tambah Data User</a>
                </div>
                <div class="card w-100">
                    <table class="table table-stripped align-middle text-center stripe" id="myTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <input type="text" class="d-none" value="{{ $current_date = date('Y-m-d') }}">
                            @foreach ($data as $list)
                                <tr>

                                    <td>{{ $list['id'] }}</td>
                                    <td>{{ $list['name'] }}</td>
                                    <td>{{ $list['email'] }}</td>
                                    <td>{{ $list['password'] }}</td>
                                    <td>{{ $list['level'] }}</td>
                                    <td>
                                        <form action="{{ url('listUser', $list->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <a href="{{ url('editUser/' . $list->id) }}" class="btn btn-light"><i
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
        </div>
    </div>
@endsection
