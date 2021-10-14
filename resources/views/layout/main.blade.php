<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/nav1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/alert.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/whyy.css') }}">
    <link rel="stylesheet" href= "{{ asset('css/search.css') }}">
    <title>{{$tittle}} | Bonbon</title>
    <script src="https://kit.fontawesome.com/e7c8958365.js" crossorigin="anonymous"></script>
</head>
<body>
    @include('partial.profile')
    @include('partial.navbar')
    <main>
        @yield('container')
    </main>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>