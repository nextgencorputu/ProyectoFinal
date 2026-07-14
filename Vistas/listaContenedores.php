<?php $titulo = "Listado Contenedores"; ?>
<?php include '../Templates/header.php'; ?>

<main class="container">

  <h2 class="text-center">CONTENEDORES</h2>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">UBICACION</th>
        <th scope="col">TIPO</th>
        <th scope="col">ESTADO</th>
        <th scope="col">OPCIONES</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>

        <td>
          <div class="list-group-horizontal">
            <a class="verDatos btn btn-outline-primary btn-sm"
              data-bs-toggle="modal" data-bs-target="#datosContenedores">Ver</a>

            <a class="btn btn-outline-secondary btn-sm">Editar</a>
            <a class="btn btn-outline-danger btn-sm">Eliminar</a>
            <?php include 'datosContenedores.php'; ?>
          </div>
        </td>

      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>
          <div class="list-group-horizontal">
            <a class="verDatos btn btn-outline-primary btn-sm"
              data-bs-toggle="modal" data-bs-target="#datosContenedores">Ver</a>

            <a class="btn btn-outline-secondary btn-sm">Editar</a>
            <a class="btn btn-outline-danger btn-sm">Eliminar</a>
          </div>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>John</td>
        <td>Doe</td>
        <td>@social</td>
        <td>
          <div class="list-group-horizontal">
            <a class="verDatos btn btn-outline-primary btn-sm"
              data-bs-toggle="modal" data-bs-target="#datosContenedores">Ver</a>

            <a class="btn btn-outline-secondary btn-sm">Editar</a>
            <a class="btn btn-outline-danger btn-sm">Eliminar</a>
            
          </div>
        </td>
      </tr>
    </tbody>
  </table>

    <?php include 'datosContenedores.php'; ?>


</main>

<?php include '../Templates/footer.php'; ?>