<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body style="background-color: #e8eff7;">

    <form class="container col-6 container d-flex flex-column mb-3 justyfy-content-center align-items-center" action="#" method="POST ">
        <img src="Img\Logo SIGERU minimalista.png" alt="Logo" height="350px" width="350px" class="col-12">
        <h1 class="d-flex justify-content-center">INICIAR SESIÓN</h1>
        
        <div class="col-6 form-floating mb-3">
            <input type="email" class="form-control rounded-pill border border-4" id="Email" placeholder="Email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="col-6 form-floating ">
            <input type="password" class="form-control rounded-pill border border-4" id="Password" placeholder="Password">
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary m-2 rounded-pill">Ingresar</button>
        </div>
        
    </form>


</body>

</html>