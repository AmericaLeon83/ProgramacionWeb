<div class="container">
    <form action="envio.php?action=<?php echo ($action == 'update') ? 'change&id_envio=' . $datos['id_envio'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Envío</h2> <!-- Cambio de título -->
        <div class="mb-3">
            <label for="inputMetodoEnvio" class="form-label">Método de Envío</label> <!-- Cambio de etiqueta -->
            <input name="metodo_envio" required="required" type="text" class="form-control" id="inputMetodoEnvio"  placeholder="Ingresa el método de envío" value="<?php echo (isset($datos["metodo_envio"])) ? $datos["metodo_envio"] : ''; ?>"> <!-- Cambio de nombre de campo -->
        </div>
        <div class="mb-3">
            <label for="inputFechaEnvio" class="form-label">Fecha de Envío</label> <!-- Cambio de etiqueta -->
            <input name="fecha_envio" required="required" type="date" class="form-control" id="inputFechaEnvio" value="<?php echo (isset($datos["fecha_envio"])) ? $datos["fecha_envio"] : ''; ?>"> <!-- Cambio de nombre de campo -->
        </div>
        <div class="mb-3">
            <label for="inputFechaEntrega" class="form-label">Fecha de Entrega</label> <!-- Cambio de etiqueta -->
            <input name="fecha_entrega" type="date" class="form-control" id="inputFechaEntrega" value="<?php echo (isset($datos["fecha_entrega"])) ? $datos["fecha_entrega"] : ''; ?>"> <!-- Cambio de nombre de campo -->
        </div>
        <div class="mb-3">
            <label for="inputEstadoEnvio" class="form-label">Estado de Envío</label> <!-- Cambio de etiqueta -->
            <input name="estado_envio" required="required" type="text" class="form-control" id="inputEstadoEnvio"  placeholder="Ingresa el estado de envío" value="<?php echo (isset($datos["estado_envio"])) ? $datos["estado_envio"] : ''; ?>"> <!-- Cambio de nombre de campo -->
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
