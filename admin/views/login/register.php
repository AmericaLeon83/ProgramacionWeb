
<form action="process.php?action=reset" method="post">
    <!-- nombre input -->
    <h1>Ingresa tus datos</h1>
    <div class="form-outline mb-4">
      <input type="email" id="form2Example1" class="form-control" name="correo" />
      <label class="form-label" for="form2Example1"> Nombre </label>
    </div>
  <div class="mb-3">
    <label for="marca" class="form-label">Primer Apellido</label>
    <input type="text" name="primer_apellido" id="txtPrimerApellido" class="form-control" value="<?php echo(isset($dato['primer_apellido']))?$dato['primer_apellido']:'' ?>">
  </div>
  <div class="mb-3">
    <label for="marca" class="form-label">Segundo Apellido</label>
    <input type="text" name="segundo_apellido" id="txtSegundoApellido" class="form-control" value="<?php echo(isset($dato['segundo_apellido']))?$dato['segundo_apellido']:'' ?>">
  </div>
  <div class="mb-3">
    <label for="marca" class="form-label">RFC</label>
    <input type="text" pattern="[A-Z]{4}[0-9]{6}[A-Z0-9]{3}" name="rfc" required id="txtRfc" class="form-control" value="<?php echo(isset($dato['rfc']))?$dato['rfc']:'' ?>">
  </div>
  <div class="mb-3">
    <label for="marca" class="form-label">CURP</label>
    <input type="text" pattern="[A-Z]{4}[0-9]{6}[H|M]{1}[A-Z0-9]{7}" name="curp" required id="txtCurp" class="form-control" value="<?php echo(isset($dato['curp']))?$dato['curp']:'' ?>">
  </div>


    <!-- submit button -->
    <input type="submit" class="btn btn-primary btn-block mb-4"> Sign in </input>
</form>

