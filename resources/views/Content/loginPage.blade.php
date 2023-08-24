@extends('Layout.layout')
@section('content')

{{-- <div class="grid">
        <div class= "card">
            <img src="public\img\Cardkanan.png">
        <h2>Gambar ini teh harusnya </h2>
      </div>
</div> --}}

<div class="grid">    
    <div class="card">
        <div class="container w-50 mt-5">
            <form action="post-login" method="post">
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
                <div class = mb-3>
                <button type="submit" class="btn-theme">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- 
<div class="grid kiri">
        <h2>Kiri</h2>
    </div>
</div>

<div class="grid">
    <div class= "card">
    <h2>Kanan</h2>
    </div>
</div> --}}
@endsection



{{-- <!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="public\img\Cardkanan.png">
	<div class="container">
		<div class="img">
			<img src="{{ asset('public\img\Cardkanan.png') }}" />
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html> --}}