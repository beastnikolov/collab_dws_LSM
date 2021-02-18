<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>Email</title>
        <style type="text/css">
            hr {
                border: 5px solid black;
                background: black;
                margin: 0px;
            }
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="text-center my-3">MovieDex</h1>
            <h3 class="text-center mb-3">Mensaje de un cliente</h3>
            <hr>
            <div class="bg-light rounded-lg border p-4">
                <p><span class="fw-bold">Nombre:</span> {{ $nombre }}</p>
                <p><span class="fw-bold">Apellidos:</span> {{ $apellidos }}</p>
                <p><span class="fw-bold">Correo electrónico: </span><a href="mailto:{{ $email }}">{{ $email }}</a></p>
                <p><span class="fw-bold">Teléfono: </span><a href="tel:{{ $telefono }}">{{ $telefono }}</a></p>
                <p class="m-0"><span class="fw-bold">Contenido:</span> {{ $contenido }}</p>
            </div>
            <hr>
        </div>
    </body>
</html>