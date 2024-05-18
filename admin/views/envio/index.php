<h1>Envíos</h1> <!-- Cambio de título -->
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="envio.php?action=create" class="btn btn-success">Nuevo</a> <!-- Cambio de enlace -->
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Método de Envío</th> <!-- Cambio de encabezado -->
      <th scope="col">Fecha de Envío</th> <!-- Cambio de encabezado -->
      <th scope="col">Fecha de Entrega</th> <!-- Cambio de encabezado -->
      <th scope="col">Estado de Envío</th> <!-- Cambio de encabezado -->
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_envio']; ?></th> <!-- Cambio de campo -->
      <td><?php echo $dato['metodo_envio']; ?></td> <!-- Cambio de campo -->
      <td><?php echo $dato['fecha_envio']; ?></td> <!-- Cambio de campo -->
      <td><?php echo $dato['fecha_entrega']; ?></td> <!-- Cambio de campo -->
      <td><?php echo $dato['estado_envio']; ?></td> <!-- Cambio de campo -->
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="envio.php?action=update&id_envio=<?php echo $dato['id_envio']; ?>" class="btn btn-info">Actualizar</a> <!-- Cambio de enlace -->
        <a href="envio.php?action=delete&id_envio=<?php echo $dato['id_envio']; ?>" class="btn btn-danger">Borrar</a> <!-- Cambio de enlace -->
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Envíos</p> <!-- Cambio de mensaje -->
