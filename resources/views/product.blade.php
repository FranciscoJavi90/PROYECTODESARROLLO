<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
</head>
<body> 
    <main class="container text-center p-5 animate__animated animate__fadeIn">
        <h1 class="display-4">Clientes</h1>
        <img src="{{ asset('img/logo.png') }}" alt="Logo de la Empresa" class="img-fluid mb-4">

        <div>
            <a href="{{route('client.index')}}" class="btn btn-success">Nuevo Cliente</a>
        </div>

        <table class="table table-striped mt-4">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">DPI</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)   
                <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->nombre}}</td>
                    <td>{{$client->apellido}}</td>
                    <td>{{$client->fecha_nacimiento}}</td>
                    <td>{{$client->DPI}}</td>
                    <td>
                        <a href="{{route('client.edit',$client->id)}}" class="btn btn-primary">Editar</a>
                        <form action="{{route('client.destroy',$client->id)}}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('privada') }}" class="btn btn-secondary">Regresar</a>
    </main>
</body>
</html>
