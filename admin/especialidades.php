<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reumatologia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .text-center {
            text-align: center;
        }
        .text-justify {
            text-align: justify;
        }
    </style>
</head>
<body>
      <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">
                  <img src="images/logo.png" alt="Logo">
              </a> 
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.html">INICIO</a>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="especialidades.php">especialistas</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="historial_clinico.html">pre-registro</a>
              </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> servicios</a>
                          <ul class="dropdown-menu">
                              <li> <a class="nav-link" href="urgencias.html">Urgencias</a></li>
                              <li><a class="nav-link" href="farmacia.html">Farmacia</a></li>
                              <li><a class="nav-link" href="terapia.html">Terapia intensiva</a></li>
                              <li><a class="nav-link" href="imagenologia.html">Imagenologia</a></li>
                              <li><a class="nav-link" href="especialidades.php">Todas Las Especialidades</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                      </li>
                      <li class="nav-item">
                         
                      </li>
                      <li class="nav-item">
                          <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="buscar especialista" aria-label="buscar_especialista">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                          </form>
            </div>
          </div>
        </nav>
        <!-- Fin del Navbar -->

        <h1>Especialidades</h1>
        <?php
      $servername = "localhost";
      $username = "reumatologia";
      $password = "123";
      $conn = new PDO("mysql:host=$servername;dbname=reumatologia", $username, $password);
      print_r ($conn) ;

      $stmt = $conn->prepare("SELECT e.id_especialidad, e.especialidad,
      CONCAT(d.nombre,' ',d.primer_apellido,' ',d.segundo_apellido) AS nombre_completo,
      e.extension
      FROM especialidad e
      LEFT JOIN doctor d ON e.id_doctor = d.id_doctor
       ORDER BY 2;
       ");
      $stmt->execute();
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      print_r($stmt->fetchALL()); 
        ?>
      

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa labore excepturi nemo accusantium odit similique beatae placeat! Voluptatem aspernatur delectus commodi adipisci nam reprehenderit consequatur expedita! Quo similique dolores possimus? </p>
        <table class="table">
            <thead>
                <tr>
                    <th>Especialidad</th>
                    <th>Responsable</th>
                    <th>Extención</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cardiologia</td>
                    <td>Dr. Juan</td>
                    <td>3306</td>
                </tr>
                <tr>
                    <td>Urologia</td>
                    <td>Dra. Maria Paz</td>
                    <td>5432</td>
                </tr>
                <tr>
                    <td>Radiologia</td>
                    <td>Dr. Pedro</td>
                    <td>1433</td>
                </tr>
                <tr>
                    <td>Dentista</td>
                    <td>Dr. Daniel</td>
                    <td>1521</td>
                </tr>
            </tbody>
        </table>
       

    </body>
    </html>
    create table especialista 
    insert into doctor(nombre,primer_spellido,segundo_apellido)values('juan','perez','gonzalez'),('jazmin','fernandez','guzman',('karina','leon','ramirez'),('daniel','perez','jimenez');
