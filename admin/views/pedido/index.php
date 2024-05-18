<h1>Pedidos</h1>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="pedido.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Total</th>
      <th scope="col">Fecha de Pedido</th>
      <th scope="col">Estado del Pedido</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_pedido']; ?></th>
      <td><?php echo $dato['total']; ?></td>
      <td><?php echo $dato['fecha_pedido']; ?></td>
      <td><?php echo $dato['estado_pedido']; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="pedido.php?action=update&id_pedido=<?php echo $dato['id_pedido']; ?>" class="btn btn-info">Actualizar</a>
        <a href="pedido.php?action=delete&id_pedido=<?php echo $dato['id_pedido']; ?>" class="btn btn-danger">Borrar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount(); ?> Pedidos</p>
