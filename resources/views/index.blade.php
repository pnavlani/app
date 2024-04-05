<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Practica 7</title>
    <style>
       
        svg {
            width: 12px;
            height: 12px;
        }
    </style>
</head>
<body>
    <!-- Navbar de Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Pràctica 7</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">Iniciar Sessió</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Registrar-se</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Mostra d'articles -->
    <div class="container mt-4">
        <h1>Articles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Articles</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>{{$article['id']}}</td>
                    <td>{{$article['articles']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Paginació -->
        {{$articles->links()}}
    </div>

    
</body>
</html>
