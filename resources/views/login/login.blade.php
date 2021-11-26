@extends('layout.form')

    @section('form')

    {{-- <form class="box" action="/login" method="post">
        @csrf
        <h1>Login</h1>
        
        <input type="text" name="name" placeholder="Username" id="name" autofocus required value="{{old('name')}}">
        <input type="password" name="password" placeholder="Password" id="password" required>
        @if(session()->has('loginError'))
            <div class="error-2">{{session('loginError')}}</div>
        @endif
        <input type="submit" value="login"> --}}

        <div class="container_reg" >
            <div class="tittle_reg">Login</div>
            <form action="/login" method="post">
                @csrf
                <div class="user_reg">
                    <div class="input_reg">
                        <span class="detail">Username </span>
                        <input type="text" name="name" id="name" value="{{old('name')}}" required> 
                    </div>
                    <div class="input_reg">
                        <span class="detail">Password </span>
                        <input type="password" name="password" id="password" required>
                        @if(session()->has('loginError'))
                        <div class="error-1">{{session('loginError')}}</div>
                         @endif
                    </div>
                    
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="login">
                </div>
            </form>
        
        </div>
        
    </form>
    @endsection
