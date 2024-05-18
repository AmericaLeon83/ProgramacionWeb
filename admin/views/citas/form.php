<div class="container">
    <form action="citas.php?action=<?php echo ($action == 'update') ? 'change&id_citas=' . $datos['id_citas'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nueva'; ?> Cita</h2>
        <div class="mb-3">
            <label for="inputNombre" class="form-label">Nombre</label>
            <input name="nombre" required="required" type="text" class="form-control" id="inputNombre"  placeholder="Ingresa el nombre" value="<?php echo (isset($datos["nombre"])) ? $datos["nombre"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputApellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" id="inputApellido"  placeholder="Ingresa el apellido" value="<?php echo (isset($datos["apellido"])) ? $datos["apellido"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail"  placeholder="Ingresa el email" value="<?php echo (isset($datos["email"])) ? $datos["email"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputTelefono" class="form-label">Teléfono</label>
            <input name="telefono" type="text" class="form-control" id="inputTelefono"  placeholder="Ingresa el teléfono" value="<?php echo (isset($datos["telefono"])) ? $datos["telefono"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputFechaCita" class="form-label">Fecha de Cita</label>
            <input name="fecha_de_cita" required="required" type="date" class="form-control" id="inputFechaCita"  value="<?php echo (isset($datos["fecha_de_cita"])) ? $datos["fecha_de_cita"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="inputHoraCita" class="form-label">Hora de Cita</label>
            <input name="hora_de_cita" required="required" type="time" class="form-control" id="inputHoraCita"  value="<?php echo (isset($datos["hora_de_cita"])) ? $datos["hora_de_cita"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
