<div class="container">
    <form action="proveedor.php?action=<?php echo ($action == 'update') ? 'change&id_proveedor=' . $datos['id_proveedor'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Proveedor</h2>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input name="nombre" required="required" type="text" class="form-control" id="inputNombre" placeholder="Ingresa el nombre" value="<?php echo (isset($datos["nombre"])) ? $datos["nombre"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputDireccion" class="form-label">Dirección</label>
            <input name="direccion" type="text" class="form-control" id="inputDireccion" placeholder="Ingresa la dirección" value="<?php echo (isset($datos["direccion"])) ? $datos["direccion"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputTelefono" class="form-label">Teléfono</label>
            <input name="telefono" type="text" class="form-control" id="inputTelefono" placeholder="Ingresa el teléfono" value="<?php echo (isset($datos["telefono"])) ? $datos["telefono"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputCorreo" class="form-label">Correo</label>
            <input name="correo" type="email" class="form-control" id="inputCorreo" placeholder="Ingresa el correo electrónico" value="<?php echo (isset($datos["correo"])) ? $datos["correo"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
