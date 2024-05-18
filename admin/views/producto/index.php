<h1>Productos</h1>
<div class="btn-group" role="group" aria-label="Basic example">
    <button type="button" class="btn btn-primary">Regresar</button>
    <a href="productos.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
                <th scope="col">Marca</th>
                <th scope="col">Fotografía</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datos as $dato) : ?>
                <tr>
                    <th scope="row"><?php echo $dato['id']; ?></th>
                    <td><?php echo $dato['nombre_producto']; ?></td>
                    <td><?php echo $dato['descripcion']; ?></td>
                    <td><?php echo $dato['precio']; ?></td>
                    <td><?php echo $dato['marca_id']; ?></td>
                    <td><?php echo $dato['foto']; ?></td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="productos.php?action=update&id_producto=<?php echo $dato['id']; ?>" class="btn btn-info">Actualizar</a>
                            <a href="productos.php?action=delete&id_producto=<?php echo $dato['id']; ?>" class="btn btn-danger">Borrar</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <p>Se encontraron <?php echo $app->getCount(); ?> productos</p>
</div>
