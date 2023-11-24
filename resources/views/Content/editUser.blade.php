@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card">
                <div class="header">
                    <div class="header-kiri">
                        <div class="h1">Edit User</div>
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
                    <form action="{{ url('listUser', $user->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Id</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $user->id }}" name="id" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Nama</span>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="basic-url"
                                aria-describedby="basic-addon3" value="{{ $user->name }}" name="name">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Usernama</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $user->username }}" name="username" disabled>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">Email</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                value="{{ $user->email }}" name="email">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text @error('password') is-invalid @enderror"
                                id="basic-addon3">Password</span>
                            <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                name="password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text @error('password_confirmation') is-invalid @enderror"
                                id="basic-addon3">Confirm Password</span>
                            <input type="password" class="form-control" id="basic-url" aria-describedby="basic-addon3"
                                name="password_confirmation" id="password_confirmation">
                            @error('password_confirmation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
