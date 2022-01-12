<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="box-nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="comics">Fumetti</a></li>
                <li><a href="comics/create">Aggiungi Fumetto</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>