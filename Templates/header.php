<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body style="background-color: #e8eff7; padding-top:70px;" class="d-flex flex-column">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-toggler">
                <div class="container-fluid d-flex align-items-center gap-3">
                    <h2 class="navbar-brand mb-0">Usuario</h2>

                    <a href="../Vistas/home.php" target="_blank" class="nav-link">Nueva Pagina</a>

                    <a href="#" class="btn btn-danger btn-sm ms-auto">Cerrar sesión</a>
                </div>
            </div>
            <div class="offcanvas offcanvas-start text-bg-dark" style="width: 200px !important; --bs-offcanvas-width: 200px !important;" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">SIGERU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="../Vistas/home.php" role="button">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Contenedores
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="../Vistas/listaContenedores.php">Lista Contenedores</a></li>
                                <li><a class="dropdown-item" href="#">Accion 2</a></li>
                                <li><a class="dropdown-item" href="#">Accion 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Camiones
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="../Vistas/listaCamiones.php">Lista Camiones</a></li>
                                <li><a class="dropdown-item" href="#">Accion 2</a></li>
                                <li><a class="dropdown-item" href="#">Accion 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Rutas
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Accion 1</a></li>
                                <li><a class="dropdown-item" href="#">Accion 2</a></li>
                                <li><a class="dropdown-item" href="#">Accion 3</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Personal
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Accion 1</a></li>
                                <li><a class="dropdown-item" href="#">Accion 2</a></li>
                                <li><a class="dropdown-item" href="#">Accion 3</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>