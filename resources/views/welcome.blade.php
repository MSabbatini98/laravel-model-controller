<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h1>HELLO WORLD</h1>
        @foreach ($movies as $movie)
            <li>
                <h2> 
                    {{$movie->title }} 
                </h2> 
                <p> 
                    Autore:
                    {{$movie ->author }}
                </p>
                <p>
                    Trama: 
                    {{$movie ->plot }}
                </p>
            </li>
        @endforeach
    </body>
</html>
