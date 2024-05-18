<h1>Marcas de lentes</h1>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="marca.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Marca</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['marca_id']; ?></th>
      <td><?php echo $dato['nombre_marca']; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="marca.php?action=update&marca_id=<?php echo $dato['marca_id']; ?>" class="btn btn-info">Actualizar</a>
        <a href="marca.php?action=delete&marca_id=<?php echo $dato['marca_id']; ?>" class="btn btn-danger">Borrar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Marcas</p>
