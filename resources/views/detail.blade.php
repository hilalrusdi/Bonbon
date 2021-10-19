@extends('layout.main')

@section('container')
    <h1>Detail Data {{ $tittle }}</h1>
    <h2>
        Company : {{ $transaksis->suppliers->company }}
    </h2>
@endsection