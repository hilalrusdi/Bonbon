@extends('layout.main')

@section('container')
    <h1>haloo saya nabilaa</h1>
    @foreach ($posts as $post)
        <article>
            <h1>{{ $post["tittle"] }}</h1>
            <h2>{{ $post["slug"] }}</h2>
            <h3>{{ $post["body"] }}</h3>
        </article>
    @endforeach
@endsection