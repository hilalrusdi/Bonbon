<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aw.css">
    <title>{{ $tittle }}</title>
</head>
<body>
    <form class="box" action="/login" method="post">
        @csrf
        <h1>Login</h1>
        @if(session()->has('loginError'))
            <h3>{{session('loginError')}}</h3>
        @endif
        <input type="text" name="name" placeholder="Username" id="password" autofocus require value="{{old('name')}}">
        <input type="password" name="password" id="password" placeholder="Password" require>
        <input type="submit" value="login">
    </form>
</body>
</html>