<div class="container">

    <!-- Ventana emergente -->
    <div class="modal fade" id="datosContenedores" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Datos Contenedor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="text" class="form-control" id="id" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ubiX">Ubicacion X:</label>
                        <input type="text" class="form-control" id="ubiX" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ubiY">Ubicacion Y:</label>
                        <input type="text" class="form-control" id="ubiY" readonly>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" readonly>
                    </div>
                    <div class="form-group">
                        <label for="capacidad">Capacidad:</label>
                        <input type="text" class="form-control" id="capacidad" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>

</div>