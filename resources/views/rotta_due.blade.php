<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <style>
        body{
            font-size: 20px;
            font-family: arial, sans-serif;
        }
    </style>
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('rotta_uno')}}">Prima rotta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Seconda rotta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('rotta_tre')}}">Terza rotta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <h1 class="text-center p-4">Seconda rotta</h1>
            <h4>{{$titolo}}</h4>
            <p class="m-0">Cast</p>
            <ul>
                @foreach ($cast as $attore)
                <li>{{$attore}}</li>
                @endforeach
            </ul>
        </main>
</body>
</html>