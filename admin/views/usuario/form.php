<div class="container">
    <form action="usuario.php?action=<?php echo ($action == 'update') ? 'change&id_usuario=' . $datos['id_usuario'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Usuario</h2>
        <div class="mb-3">
            <label for="inputCorreo" class="form-label">Correo</label>
            <input name="correo" required="required" type="email" class="form-control" id="inputCorreo" placeholder="Ingresa el correo" value="<?php echo (isset($datos["correo"])) ? $datos["correo"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Contraseña</label> <!-- Agregado para la contraseña -->
            <input name="password" required="required" type="password" class="form-control" id="inputPassword" placeholder="Ingresa la contraseña">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
