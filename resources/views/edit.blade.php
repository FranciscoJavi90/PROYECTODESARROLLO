<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 animate__animated animate__fadeIn">
        <h2 class="text-center mb-4">Editar un Cliente</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ asset('img/logo.png') }}" alt="Logo de la Empresa" class="img-fluid mb-4">
                <form method="post" action="{{route('client.update',$client->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$client->nombre}}">
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{$client->apellido}}">
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="{{$client->fecha_nacimiento}}">
                    </div>
                    <div class="mb-3">       
                        <label for="DPI" class="form-label">DPI:</label>
                        <input type="text" class="form-control" id="DPI" name="DPI" minlength="10" maxlength="13" value="{{$client->DPI}}">  
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Editar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-i8LDVg5+Jd5j+kz2pS9LGjLobLWNp3aiak5SR2rXhj5X5TifeglfZa4nt1wZV5wP7" crossorigin="anonymous"></script>
</body>
</html>
