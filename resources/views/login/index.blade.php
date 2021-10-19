@extends('layout.login')

    @section('login')

    <form class="box" action="/login" method="post">
        @csrf
        <h1>Login</h1>
        
        <input type="text" name="name" placeholder="Username" id="name" autofocus required value="{{old('name')}}">
        <input type="password" name="password" placeholder="Password" id="password" required>
        @if(session()->has('loginError'))
            <div class="error-2">{{session('loginError')}}</div>
        @endif
        <input type="submit" value="login">
        
    </form>
    @endsection
