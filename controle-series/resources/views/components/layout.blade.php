<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>{{ $title }} - Controle de series</title>
</head>
<div class="container">

    <body>
        <h1>{{ $title }}</h1>

        @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
        @endisset

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $erro)
                    <li class="">{{ $erro }}</li>
                @endforeach
            </ul>
        @endif

        {{ $slot }}
    </body>
</div>

</html>
