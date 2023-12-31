@extends('Layout.layoutLogin')
@section('content')
    <div class="body">
        <div class="container">
            <div class="login-container">
                <div class="card-kiri">
                    <img class="img-kiri" src="img\icon2.png" alt="Card Kiri">
                </div>
                <div class="card-kanan">
                    <img class="img-kanan" src="img\Cardkanan.png" alt="Card Kanan">
                    <form class="login-form" action="post-login" method="post">
                        {{ csrf_field() }}
                        <div class="welcome">
                            <h1>Selamat Datang!</h1>
                        </div>
                        <div>
                            <label for="floatingInput">Username</label>
                            <input type="text" class="email form-control mt-2 @error('username') is-invalid @enderror"
                                name="username" placeholder="Username">
                            @error('username')
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
                        <div>
                            <div class="g-recaptcha mb-3" data-sitekey="6LeayksnAAAAAF1GUZP2TRThZVtpkkC5WsehUqzM"></div>
                            @error('g-recaptcha-response')
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
