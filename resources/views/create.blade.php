<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
</head>
<body>
    <div class="container animate__animated animate__fadeIn">
        <h2 class="mt-4">Crear Nuevo Cliente</h2>
        <div class="col-12 col-md-6">
            <img src="{{ asset('img/logo.png') }}" alt="Logo de la Empresa" class="img-fluid mb-4">
            <form method="post" action="{{route('client.store')}}">
                @csrf

                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre"/>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"/>
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha Nacimiento:</label>
                    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"/>
                </div>
                <div class="form-group">       
                    <label for="DPI">DPI:</label>
                    <input type="text" class="form-control" id="DPI" name="DPI" minlength="10" maxlength="13"/><br/>   
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <a href="{{ route('privada') }}" class="btn btn-secondary mt-3">Regresar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-i8LDVg5+Jd5j+kz2pS9LGjLobLWNp3aiak5SR2rXhj5X5TifeglfZa4nt1wZV5wP7" crossorigin="anonymous"></script>
</body>
</html>
