<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">

                <div class="card-header">
                    Todos ::
                </div>
                <div class="card-body">

                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">{{$todo->name}}
                            <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-end">View</a>
                            </li>
                        @endforeach
                    </ul>

                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
