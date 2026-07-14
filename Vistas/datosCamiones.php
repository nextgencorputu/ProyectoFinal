<div class="container">

    <!-- Ventana emergente -->
    <div class="modal fade" id="datosCamiones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Datos Camión</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" readonly>
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo:</label>
                        <input type="text" class="form-control" id="tipo" readonly>
                    </div>
                    <div class="form-group">
                        <label for="ruta">Ruta Asignada:</label>
                        <input type="text" class="form-control" id="ruta" readonly>
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