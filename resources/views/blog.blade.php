<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>About</title>
    </head>
    <body>
        
        <h1>Blog</h1>
        @foreach ($posts as $item)
        <div>
        <h2>{{ $item -> title  }}</h2>
        <p>{{ $item -> body  }}</p>
        </div>
        
            
        @endforeach
    </body>
</html>