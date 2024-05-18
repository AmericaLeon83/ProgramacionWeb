<h1>Citas</h1>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="citas.php?action=create" class="btn btn-success">Nueva</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Fecha de Cita</th>
      <th scope="col">Hora de Cita</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_citas']; ?></th>
      <td><?php echo $dato['nombre']; ?></td>
      <td><?php echo $dato['apellido']; ?></td>
      <td><?php echo $dato['email']; ?></td>
      <td><?php echo $dato['telefono']; ?></td>
      <td><?php echo $dato['fecha_de_cita']; ?></td>
      <td><?php echo $dato['hora_de_cita']; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="citas.php?action=update&id_citas=<?php echo $dato['id_citas']; ?>" class="btn btn-info">Actualizar</a>
        <a href="citas.php?action=delete&id_citas=<?php echo $dato['id_citas']; ?>" class="btn btn-danger">Borrar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Citas</p>
