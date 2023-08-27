@extends('Layout.layout')
@include('Component.navbar')
@section('content')
    {{-- @include('Component.sidebar') --}}
    {{-- <div class="cardSidebar"> --}}
    <div class="container w-50 mt-5">
        <h1>Register Page</h1>
        <form action="post-register" method="post">
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
                <input type="text" class="form-control mt-2 @error('name') is-invalid @enderror" name="name">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="floatingInput">Email</label>
                <input type="email" class="form-control mt-2 @error('email') is-invalid @enderror" name="email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="floatingInput">Password</label>
                <input type="password" class="form-control mt-2 @error('password') is-invalid @enderror" name="password">
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
            </div>
            <div>
                <div class="g-recaptcha mb-3" data-sitekey="6LeayksnAAAAAF1GUZP2TRThZVtpkkC5WsehUqzM"></div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>

@endsection
