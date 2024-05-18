<h1>Oftalmólogos</h1>
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="oftalmologo.php?action=create" class="btn btn-success">Nuevo</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Horario Disponible</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_oftalmologo']; ?></th>
      <td><?php echo $dato['nombre']; ?></td>
      <td><?php echo $dato['especialidad']; ?></td>
      <td><?php echo $dato['horario_disponible']; ?></td>
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="oftalmologo.php?action=update&id_oftalmologo=<?php echo $dato['id_oftalmologo']; ?>" class="btn btn-info">Actualizar</a>
        <a href="oftalmologo.php?action=delete&id_oftalmologo=<?php echo $dato['id_oftalmologo']; ?>" class="btn btn-danger">Borrar</a>
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Oftalmólogos</p>
