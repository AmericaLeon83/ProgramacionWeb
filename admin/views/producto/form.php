<div class="container">
    <form action="productos.php?action=<?php echo ($action == 'update') ? 'change&id_producto=' . $datos['id'] : 'save'; ?>" method="post" enctype="multipart/form-data">
        <h2><?php echo ($action == 'update') ? 'Editar' : 'Nuevo'; ?> Producto</h2>
        <div class="mb-3">
            <label for="InputNombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="InputNombre" name="nombre" required="required" value="<?php echo (isset($datos["nombre_producto"])) ? $datos["nombre_producto"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="InputTipo" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="InputTipo" name="descripcion" value="<?php echo (isset($datos["descripcion"])) ? $datos["descripcion"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="InputPrecio" class="form-label">Precio</label>
            <input type="text" class="form-control" id="InputPrecio" name="precio" value="<?php echo (isset($datos["precio"])) ? $datos["precio"] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="InputIdMarca" class="form-label">Marca</label>
            <select class="form-select" id="InputIdMarca" name="marca_id">
                <?php foreach ($marcas as $marca): 
                    $selected = ($marca['marca_id'] == $datos['marca_id']) ? 'selected' : '';
                ?>
                <option value="<?php echo $marca['marca_id']; ?>" <?php echo $selected; ?>><?php echo $marca['nombre_marca']; ?></option>
                <?php endforeach; ?>                
            </select>
        </div>
        <?php if($action == 'update'): ?>
        <div class="mb-3">
            <label for="InputFotografia" class="form-label">Imagen actual</label>
            <img src="../uploads/productos/<?php echo $datos['foto']; ?>" >
        </div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="InputFotografia" class="form-label">Fotografia</label>
            <input type="file" class="form-control" id="InputFotografia" name="foto">
        </div>
        <input type="submit" class="btn btn-primary" name="save" value="Guardar">
    </form>
</div>
