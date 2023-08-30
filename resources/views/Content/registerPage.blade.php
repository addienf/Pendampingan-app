@extends('Layout.layout')
@section('content')
    <div class="body">
        <div class="container">
            <div class="card table-card">
                <div class="register-header">
                    <i class="fa-solid fa-circle-user fa-2xl"></i>
                </div>
                <div class="h1-regis">REGISTRASI</div>
                <div class="card w-100 ">
                    <div class="form">
                        <form action="post-register" method="post" class="input-form">
                            {{ csrf_field() }}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label for="floatingInput">Name</label>
                                <input type="text" class="form-control mt-2 @error('name') is-invalid @enderror"
                                    name="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="floatingInput">Email</label>
                                <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="floatingInput">Password</label>
                                <input type="password" class="form-control mt-2 @error('password') is-invalid @enderror"
                                    name="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-field mb-3">
                                <label for="level">Role</label>
                                <select name="level" class="form-select" required>
                                    <option value="user">User</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('level')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <div class="g-recaptcha mb-3" data-sitekey="6LeayksnAAAAAF1GUZP2TRThZVtpkkC5WsehUqzM"></div>
                                @error('g-recaptcha-response')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="btn-submit">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
