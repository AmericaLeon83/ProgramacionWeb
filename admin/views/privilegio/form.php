<div class="container">
    <form action="privilegio.php?action=<?php echo ($action == 'update') ? 'change&id_privilegio=' . $datos['id_privilegio'] : 'save'; ?>" method="POST" enctype="multipart/form-data"> <!-- Cambio de 'marca.php' a 'privilegio.php' y 'id_marca' a 'id_privilegio' -->
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Privilegio</h2> <!-- Cambio de 'Marca de lentes' a 'Privilegio' -->
        <div class="mb-3">
            <label for="inputPrivilegio" class="form-label">Privilegio</label> <!-- Cambio de 'Marca' a 'Privilegio' -->
            <input name="privilegio" required="required" type="text" class="form-control" id="inputPrivilegio"  placeholder="Ingresa el privilegio" value="<?php echo (isset($datos["privilegio"])) ? $datos["privilegio"] : ''; ?>"> <!-- Cambio de 'marca' a 'privilegio' -->
        </div>
        <!-- No hay cambio necesario para la sección de Fotografía si no estaba relacionada con 'marca' -->
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
