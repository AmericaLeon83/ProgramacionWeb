<div class="container">
    <form action="oftalmologo.php?action=<?php echo ($action == 'update') ? 'change&id_oftalmologo=' . $datos['id_oftalmologo'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Oftalmólogo</h2>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input name="nombre" required="required" type="text" class="form-control" id="inputNombre" placeholder="Ingrese el nombre" value="<?php echo (isset($datos["nombre"])) ? $datos["nombre"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputApellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" id="inputApellido" placeholder="Ingrese el apellido" value="<?php echo (isset($datos["apellido"])) ? $datos["apellido"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputEspecialidad" class="form-label">Especialidad</label>
            <input name="especialidad" type="text" class="form-control" id="inputEspecialidad" placeholder="Ingrese la especialidad" value="<?php echo (isset($datos["especialidad"])) ? $datos["especialidad"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputHorario" class="form-label">Horario Disponible</label>
            <input name="horario_disponible" type="text" class="form-control" id="inputHorario" placeholder="Ingrese el horario disponible" value="<?php echo (isset($datos["horario_disponible"])) ? $datos["horario_disponible"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
