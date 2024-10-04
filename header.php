<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Banco De Tiempo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="estilos-personalizados.css">

    <style>
        /* Cambiar color de fondo del header */
        header {
            background-color: #d3d3d3; /* Gris claro */
        }

        /* Cambiar color de fondo y texto del contenedor superior (teléfono y redes sociales) */
        .wrap {
            background-color: #ffffff; /* Fondo blanco */
        }

        /* Cambiar el color del texto del teléfono y enlaces sociales */
        .wrap .phone a,
        .wrap .social-media a {
            color: black; /* Texto negro */
        }

        /* Cambiar tamaño del logotipo */
        header .navbar-brand img {
            width: 110px; /* Ancho del logo */
            height: auto; /* Ajustar altura automáticamente para mantener proporción */
        }

        /* Asegurar que el diseño no se deforme en pantallas grandes */
        .navbar-nav {
            flex-wrap: nowrap; /* Evitar que se ajuste de manera incorrecta */
        }

        /* Estilos adicionales para asegurar que el header no se deforme */
        @media (min-width: 1200px) {
            .navbar {
                justify-content: space-between;
            }
        }

        /* Estilos para los botones personalizados */
        .button-container {
            display: flex;
            align-items: center;
        }

        .button-container .btn {
            padding: 0.5rem 1rem; /* Tamaño del botón */
            font-size: 1rem;
            border-radius: 30px; /* Bordes redondeados */
            border: none;
            margin-left: 10px;
            color: white;
            background-color: #007bff; /* Color del botón (azul) */
            transition: background-color 0.3s ease; /* Transición suave */
        }

        .button-container .btn:hover {
            background-color: #0056b3; /* Cambio de color en hover */
            text-decoration: none;
        }

        /* Estilos para el botón de carrito */
        .boton-yo {
            background-color: #28a745 !important; /* Color del carrito (verde) */
        }

        /* Botón de agendar cita */
        .button-container .btn img {
            margin-right: 8px; /* Espacio entre el icono y el texto */
        }

        /* Botón de login personalizado */
        .login-button {
            background-color: #6c757d; /* Color de fondo del botón de inicio de sesión (gris) */
        }

        .login-button:hover {
            background-color: #5a6268; /* Cambio de color al pasar el mouse */
        }

        /* Botón de agendar cita con estilo */
        .button-container a {
            color: white; /* Cambiar color de texto a blanco */
            text-decoration: none;
        }

    </style>
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
                                <a href="https://www.facebook.com/profile.php?id=61565387142089&mibextid=LQQJ4d" class="d-flex align-items-center justify-content-center"><img src="images/f.png" alt="Facebook" style="width: 30px; height: 30px;"></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><img src="images/t.png" alt="Twitter" style="width: 30px; height: 30px;"></a>
                                <a href="https://www.instagram.com/banco_de_tiempo_lince?igsh=Zmk3dDY0dmE1b2t1" class="d-flex align-items-center justify-content-center"><img src="images/i.png" alt="Instagram" style="width: 30px; height: 30px;"></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><img src="images/w.png" alt="Whatsapp" style="width: 30px; height: 30px;"></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Logo">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation" style="border-color: #ffffff;">
                    <span class="fa fa-bars" style="color: #ffffff;"></span> Menu
                </button>

                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active"><a href="index.php" class="nav-link">Inicio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown">voluntariados</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="mujer.php">Mujer</a>
                                <a class="dropdown-item" href="hombre.php">Hombre</a>
                                <a class="dropdown-item" href="productos.php">Todos los Productos</a>
                                <a class="dropdown-item" href="lenteAzul.php">Lentes de luz azul</a>
                                <a class="dropdown-item" href="laboratorio.php">Agendar cita</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="armazones.php" class="nav-link">servicio social</a></li>
                        <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                        <li class="nav-item"><a href="profile.php" class="nav-link">Mi Perfil</a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    </ul>
                </div>

                <!-- Botones personalizados -->
                <div class="button-container">
                    <!-- Botón de agendar cita -->
                <!--    <div class="navbar-nav ml-auto">
                        <button class="btn">
                            <a href="registroDeCitas.php" style="text-decoration: none;">
                                <img src="images/calendar.png" alt="Agendar Cita" style="width: 20px; height: 20px; margin-right: 3px; margin-bottom: 3px;">
                                Agendar Cita
                            </a>
                        </button>
                    </div> -->

                    <!-- Botón de inicio de sesión -->
                    <a href="login.php" class="btn login-button">Iniciar Sesión</a>

                    <!-- Botón del carrito -->
                    <a href="cart.php" class="btn btn-success boton-yo">
                        <strong>Mis aportaciones &nbsp;<i class="fa fa-shopping-cart"></i>
                        <span class="badge"></span></strong>
                    </a>
                </div>
            </div>
        </nav>
    </header>
</body>
