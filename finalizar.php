

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Optica Los Angeles</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  <body>

  <?php include 'header.php'; ?>
   
    <div class="container" id="main">
        <div class="main-form">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Completar Datos</legend>
                            <form action="completar_pedido.php" method="post">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre_cliente" required>
                                </div>
                                <div class="form-group">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" required>
                                </div>
                                <div class="form-group">
                                    <label>Correo</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control" name="telefono" required>
                                </div>
                                <div class="form-group">
                                    <label>Comentario</label>
                                    <textarea name="comentario" class="form-control"  rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>
