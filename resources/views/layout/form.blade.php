<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/create.css')}}">
    <link rel="stylesheet" href="{{ asset('css/error.css')}}">
    <title>{{$tittle}} | Bonbon</title>
    
</head>
<body class="{{ ($tittle === "Tanaman") ? 'body-1' : 'body-2' }}">
                
    @yield('form')
            
</body>
</html>