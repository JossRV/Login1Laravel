<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <h2>Login</h2>
                <form action="{{route('logear')}}" method="post">
                    {{-- @csrf token de envio de informacion de formulario, identificacion de formulario --}}
                    @csrf
                    <label for="usuaro">Usuario</label>
                    <input type="text" name="name" class="form-control mb-3 mt-3" id="usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control mb-3" id="password">
                    <button class="btn btn-outline-dark">Entrar</button>
                </form>
                <a href="{{route('registro')}}" class="btn btn-outline-dark mt-3">registrarse</a>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>