<h1>Envíos</h1> 
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="envio.php?action=create" class="btn btn-success">Nuevo</a> 
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Método de Envío</th> 
      <th scope="col">Fecha de Envío</th> 
      <th scope="col">Fecha de Entrega</th> 
      <th scope="col">Estado de Envío</th> 
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_envio']; ?></th> 
      <td><?php echo $dato['metodo_envio']; ?></td> 
      <td><?php echo $dato['fecha_envio']; ?></td> 
      <td><?php echo $dato['fecha_entrega']; ?></td> 
      <td><?php echo $dato['estado_envio']; ?></td> 
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="envio.php?action=update&id_envio=<?php echo $dato['id_envio']; ?>" class="btn btn-info">Actualizar</a> 
        <a href="envio.php?action=delete&id_envio=<?php echo $dato['id_envio']; ?>" class="btn btn-danger">Borrar</a> 
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Envíos</p> 
