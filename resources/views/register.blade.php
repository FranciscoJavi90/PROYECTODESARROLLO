<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
</head>
<body> 
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center animate__animated animate__fadeInDown">Registro</h2>
                        @if(Session::has('registration_success'))
                        <div class="alert alert-success mt-3 animate__animated animate__fadeInUp">
                            {{ Session::get('registration_success') }}
                        </div>
                        @endif
                        <form method="POST" action="{{route('validar-registro')}}" class="animate__animated animate__fadeInUp">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo de la Empresa" class="img-fluid">
                            @csrf
                            @if(Session::has('registration_error'))
                            <div class="alert alert-danger mt-3">
                                {{ Session::get('registration_error') }}
                            </div>
                            @endif
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email</label>
                                <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="userInput" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="userInput" name="name" required autocomplete="off">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Registrarse</button>
                                <a href="/login" class="btn btn-danger ms-2">Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-i8LDVg5+Jd5j+kz2pS9LGjLobLWNp3aiak5SR2rXhj5X5TifeglfZa4nt1wZV5wP7" crossorigin="anonymous"></script>
</body>
</html>
