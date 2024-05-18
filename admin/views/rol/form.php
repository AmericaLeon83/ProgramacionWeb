<div class="container">
    <form action="rol.php?action=<?php echo ($action == 'update') ? 'change&id_rol=' . $datos['id_rol'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Rol</h2>
        <div class="mb-3">
            <label for="inputRol" class="form-label">Rol</label>
            <input name="rol" required="required" type="text" class="form-control" id="inputRol"  placeholder="Ingrese el rol" value="<?php echo (isset($datos["rol"])) ? $datos["rol"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
