<h1>Privilegios</h1> <!-- Cambio de 'Marcas de lentes' a 'Privilegios' -->
<div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary">Regresar</button>
  <a href="privilegio.php?action=create" class="btn btn-success">Nuevo</a> <!-- Cambio de 'marca.php' a 'privilegio.php' -->
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Identificador</th>
      <th scope="col">Privilegio</th> <!-- Cambio de 'Marca' a 'Privilegio' -->
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($datos as $dato) : ?>
    <tr>
      <th scope="row"><?php echo $dato['id_privilegio']; ?></th> <!-- Cambio de 'id_marca' a 'id_privilegio' -->
      <td><?php echo $dato['privilegio']; ?></td> <!-- Cambio de 'marca' a 'privilegio' -->
      <td>
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="privilegio.php?action=update&id_privilegio=<?php echo $dato['id_privilegio']; ?>" class="btn btn-info">Actualizar</a> <!-- Cambio de 'marca.php' a 'privilegio.php' y 'id_marca' a 'id_privilegio' -->
        <a href="privilegio.php?action=delete&id_privilegio=<?php echo $dato['id_privilegio']; ?>" class="btn btn-danger">Borrar</a> <!-- Cambio de 'marca.php' a 'privilegio.php' y 'id_marca' a 'id_privilegio' -->
        </div>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<p>Se encontraron <?php echo $app->getCount() ;  ?> Privilegios</p> <!-- Cambio de 'Marca' a 'Privilegio' -->
