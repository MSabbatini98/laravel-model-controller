{{-- @add($movies); --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lista di tutti i film</title>
</head>
<body>
    <h1>Lista di tutti i film</h1>
    <ul>
        @foreach ($movies as $item)
            <h3> {{ $item->title }} </h3>
        @endforeach
        <li>

        </li>
    </ul>
</body>
</html>