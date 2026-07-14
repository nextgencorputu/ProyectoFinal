<?php $titulo = "Listado Camiones"; ?>
<?php include '../Templates/header.php'; ?>

<main class="container">
    <h2 class="text-center">CAMIONES</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">MATRICULA</th>
                <th scope="col">TIPO</th>
                <th scope="col">RUTA ASIGNADA</th>
                <th scope="col">ESTADO</th>
                <th scope="col">OPCIONES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>ABC123</td>
                <td>Camión de carga</td>
                <td>Ruta 1</td>
                <td>En servicio</td>
                <td>
                    <div class="list-group-horizontal">
                        <a class="verDatos btn btn-outline-primary btn-sm"
                           data-bs-toggle="modal" data-bs-target="#datosCamiones"
                          >Ver</a>

                        <a class="btn btn-outline-secondary btn-sm">Editar</a>
                        <a class="btn btn-outline-danger btn-sm">Eliminar</a>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>DEF456</td>
                <td>Camión refrigerado</td>
                <td>Ruta 2</td>
                <td>En mantenimiento</td>
                <td>
                    <div class="list-group-horizontal">
                        <a href="#"
                           class="verDatos btn btn-outline-primary btn-sm"
                           data-bs-toggle="modal" data-bs-target="#datosCamiones"
                           >Ver</a>

                        <a href="#" class="btn btn-outline-secondary btn-sm">Editar</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>GHI789</td>
                <td>Camión cisterna</td>
                <td>Ruta 3</td>
                <td>Disponible</td>
                <td>
                    <div class="list-group-horizontal">
                        <a href="#"
                           class="verDatos btn btn-outline-primary btn-sm"
                           data-bs-toggle="modal" data-bs-target="#datosCamiones"
                           >Ver</a>

                        <a href="#" class="btn btn-outline-secondary btn-sm">Editar</a>
                        <a href="#" class="btn btn-outline-danger btn-sm">Eliminar</a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <?php include 'datosCamiones.php'; ?>

</main>

<?php include '../Templates/footer.php'; ?>