<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/login1.css')}}">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="/login" method="post">
                    @csrf
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="username" id="username" value="{{old('username')}}" required placeholder="Username">
					<input type="password" name="password" id="password" required placeholder="Password">
                    @if(session()->has('loginError'))
                    <div class="error-1 input">{{session('loginError')}}</div>
                     @endif
                    @error('name')
                    <div class="error-1 input">Data tidak valid</div>
                    @enderror
					<div>
                        <input class="button" type="submit" name="submit" value="login">
                    </div>
				</form>
			</div>
	</div>
</body>
</html>