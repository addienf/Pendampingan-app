@extends('Layout.layoutLogin')
@section('content')
    <div class="body">
        <div class="container">
            <div class="login-container">
                <div class="card-kiri">
                    <img class="img-kiri" src="img\dahyun.png" alt="Card Kiri">
                </div>
                <div class="card-kanan">
                    <img class="img-kanan" src="img\Cardkanan.png" alt="Card Kanan">
                    <form class="login-form" action="post-login" method="post">
                        {{ csrf_field() }}
                        <div class="welcome">
                            <h1>Selamat Datang!</h1>
                        </div>
                        <div>
                            <label for="floatingInput">Email</label>
                            <input type="email" class="email form-control mt-2 @error('email') is-invalid @enderror"
                                name="email" placeholder="Email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="floatingInput">Password</label>
                            <input type="password"
                                class="password form-control mt-2 @error('password') is-invalid @enderror" name="password"
                                placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="login">
                            <button type="submit" class="login-btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
