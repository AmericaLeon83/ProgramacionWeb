<?php
//ACTIVAR LAS SESSIONES EN PHP
session_start();
require 'funciones.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];
    require 'vendor/autoload.php';
    $producto = new Kawschool\Producto; 
    $resultado = $producto->mostrarPorId($id); 
    
    if(!$resultado)
       header('Location: index.php');

       

    if(isset($_SESSION['carrito'])){ // SI EL CARRITO EXISTE
        // SI EL PRODUCTO EXISTE EN EL CARRITO
        if(array_key_exists($id,$_SESSION['carrito'])){
            actualizarProducto($id); 
        }else{
            // SI EL PRODUCTO NO EXISTE EN EL CARRITO
            agregarProducto($resultado, $id); 
        }

    }else{
        // SI EL CARRITO NO EXISTE
        agregarProducto($resultado, $id); 

    }

   

}  

?>
 <!-- INICIO DEL HEADER DE LAS VISTAS DEL CLIENTE  -->
 <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Optica los angeles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="estilos-personalizados.css">
<!--   C  A  R  R  I   T  O         E   S    T   I    L    O     S  -->

<link rel="stylesheet" href="buttons.css">

 
</head>
<body>
      <header>
        <div class="wrap">
          <div class="container">
              <div class="row justify-content-between">
                  <div class="col">
                      <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+00 1234 567</a></p>
                  </div>
                  <div class="col d-flex justify-content-end">
                      <div class="social-media">
                          <p class="mb-0 d-flex">
                              <a href="https://www.facebook.com/Opticalosangelesc?locale=es_LA" class="d-flex align-items-center justify-content-center"><img src="images/f.png" alt="Facebook" style="width: 30px; height: 30px;"></a>
                              <a href="#" class="d-flex align-items-center justify-content-center"><img src="images/t.png" alt="Twitter" style="width: 30px; height: 30px;"></a>
                              <a href="https://www.instagram.com/optlosangeles/reels/" class="d-flex align-items-center justify-content-center"><img src="images/i.png" alt="Instagram" style="width: 30px; height: 30px;"></a>
                              <a href="#" class="d-flex align-items-center justify-content-center"><img src="images/w.png" alt="Whatsapp" style="width: 30px; height: 30px;"></a>
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
      
        <nav class="navbar navbar-expand-lg " style="background-color: #343a40;">
          <div class="container">
           
          
          <a class="navbar-brand" href="index.php">
              <img src="images/logoo.png" alt="Logo">
          </a>  
                
<!-- Contenedor del botón de búsqueda -->
<div class="search-button-container">
    <!-- Botón de búsqueda -->
    <form action="index.php" class="searchform order-sm-start order-lg-last special-form">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Buscar">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary"> <!-- No incluyas btn-sm aquí -->
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </div>
    </form>
</div>
<style>
/* Estilos para el botón de búsqueda */
.search-button-container .btn {
    padding: 0.25rem 0.5rem; /* Ajusta el padding para reducir el tamaño */
    font-size: 0.8rem; /* Ajusta el tamaño de la fuente */
    line-height: 1.25; /* Ajusta la altura de línea */
}
</style>
<!-- Estilos CSS para ajustar el tamaño de la imagen -->

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #ffffff;">
                  <span class="fa fa-bars" style="color: #ffffff;"></span> Menu
              </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                  <ul class="navbar-nav m-auto">
                      <li class="nav-item active"><a href="index.php" class="nav-link" style="color: #ffffff;">Inicio</a></li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">Modelos</a>
                          <div class="dropdown-menu" aria-labelledby="dropdown04" style="background-color: #343a40;">
                              <a class="dropdown-item" href="mujer.php" style="color: #ffffff;">Mujer</a>
                              <a class="dropdown-item" href="hombre.php" style="color: #ffffff;">Hombre</a>
                              <a class="dropdown-item" href="lentesol.php" style="color: #ffffff;">Lentes de sol</a>
                              <a class="dropdown-item" href="lenteAzul.php" style="color: #ffffff;">Lentes de luz azul</a>
                              <a class="dropdown-item" href="agendarcita.php" style="color: #ffffff;">Agendar cita</a>
                          </div>
                      </li>
                      <li class="nav-item"><a href="armazones.php" class="nav-link" style="color: #ffffff;">Armazones</a></li>
                      <li class="nav-item"><a href="blog.php" class="nav-link" style="color: #ffffff;">Blog</a></li>
                    
                  </ul>
                  
              </div>
             
          </div>

      
<!-- Contenedor para los botones -->
<div class="button-container">
 <!-- Botón de agendar cita -->
<div class="navbar-nav ml-auto">
    <button class="btn" style="background-color: transparent; border: none;">
        <a href="agendarcita.php" style="text-decoration: none; color: #ffffff;">
            <img src="images/calendario.png" alt="Agendar Cita" style="width: 50px; height: 50px; margin-right: 3px; margin-bottom: 3px;">
            Agendar Cita
        </a>
    </button>
</div>

        
        <!-- Fin del botón de agendar cita -->
  
    <!-- Botón de inicio de sesión con enlace a un archivo PHP -->
<a href="admin/login.php" class="btn login-button">Iniciar Sesión</a>


    <!-- Sección para el carrito -->
    <div class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <!-- Botón del carrito -->
                <a href="carrito.php" class="btn btn-success boton-yo">
                    <strong>Ver carrito 
                        &nbsp;<i class="fa fa-shopping-cart"></i>
                        <span class="badge"><?php print cantidadProductos(); ?></span>
                    </strong>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- FIN DEL Contenedor para los botones -->

        <!-- Fin del botón de agendar cita -->
      </nav>
    </header>
      <!-- Fin del Navbar -->