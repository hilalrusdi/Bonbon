@extends('layout.main')

@section('container')
    
    <h1>Dashboard</h1>
    @can('admin')
    <h2>Login as Admin</h2>
    @endcan

@endsection