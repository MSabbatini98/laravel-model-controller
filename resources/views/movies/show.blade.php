{{-- @add($movie); --}} 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista di tutti i film</title>
</head>
<body>

    <h1> {{$movie->title }} </h1>
    <p>
        Autore:
        {{$movie ->author }}
    </p>
    <p>
        Trama: 
        {{$movie ->plot }}
    </p>

</body>
