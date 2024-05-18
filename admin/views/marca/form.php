<div class="container">
    <form action="marca.php?action=<?php echo ($action == 'update') ? 'change&marca_id=' . $datos['marca_id'] : 'save'; ?>" method="POST" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nueva'; ?> Marca de lentes</h2>
        <div class="mb-3">
            <label for="inputMarca" class="form-label">Marca</label>
            <input name="nombre_marca" required="required" type="text" class="form-control" id="inputMarca"  placeholder="Ingresa la marca" value="<?php echo (isset($datos["nombre_marca"])) ? $datos["nombre_marca"] : ''; ?>">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
    </form>
</div>
