@extends('layout.login')

    @section('login')

    <form class="box" action="/login" method="post">
        @csrf
        <h1>Login</h1>
        @if(session()->has('loginError'))
            <h3>{{session('loginError')}}</h3>
        @endif
        <input type="text" name="name" placeholder="Username" id="name" autofocus required value="{{old('name')}}">
        <input type="password" name="password" placeholder="Password" id="password" required>
        <input type="submit" value="login">
        
    </form>
    @endsection
