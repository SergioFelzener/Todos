<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Todo´s</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Lista de Todos</h1>
            <ul class="list-group">
                @foreach($todos as $todo)
                    <li class="list-group-item">
                        <span>{{$todo->name}}</span>
                    <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right ml-1">visualizar</a>
                        <a href="#" class="btn btn-primary btn-sm float-right ml-1">editar</a>
                        <a href="#" class="btn btn-primary btn-sm float-right ml-1">excluir</a>
                    </li>
                @endforeach
            </ul>
    </div>
</body>
</html>