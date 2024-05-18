<h1>Proveedores</h1>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="proveedor.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Correo</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_proveedor']; ?></th>
      <td><?php echo $dato['nombre']; ?></td>
      <td><?php echo $dato['direccion']; ?></td>
      <td><?php echo $dato['telefono']; ?></td>
      <td><?php echo $dato['correo']; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="proveedor.php?action=update&id_proveedor=<?php echo $dato['id_proveedor']; ?>" class="btn btn-info">Actualizar</a>
        <a href="proveedor.php?action=delete&id_proveedor=<?php echo $dato['id_proveedor']; ?>" class="btn btn-danger">Borrar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> proveedores</p>
