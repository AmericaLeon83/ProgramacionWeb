<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('https://s2.abcstatics.com/abc/www/multimedia/familia/2023/07/07/gafas-U04574006850gNL-1024x512@abc.JPG'); /* URL de la imagen de fondo */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .form-signin {
            max-width: 400px;
            padding: 20px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.7); 
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"],
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #6c757d; /* Border color */
        }

        .form-signin input[type="email"]:focus,
        .form-signin input[type="password"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-signin .btn-primary {
            background-color: #FF1493;
            border-color: #FF1493;
        }

        .form-signin .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .form-signin img {
            margin-bottom: 20px;
        }

        .form-signin a {
            color: #FF1493;
        }

        .form-signin a:hover {
            color: #218838;
        }

        .form-signin h1 {
            color: #FF1493; 
        }

        .text-muted {
            color: #6c757d !important;
        }
    </style>

    <title>Login</title>
  </head>
  <body class="text-center">

    <main class="form-signin">
        <form action="login.php?action=login" method="post">
            <img class="mb-4" src="images/logoo.png" alt="Logo" width="260" height="95">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

            <div class="form-floating">
                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Correo electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Contraseña</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Recordarme
                </label>
            </div>
            <div class="mb-3">
                <a href="login.php?action=forgot">Recuperar mi contraseña</a>
            </div>
            
            <button class="btn btn-primary w-100 py-2" type="submit">Iniciar sesión</button>

                  <!-- Nuevo botón para registrar -->
                  <a class="btn btn-secondary w-100 py-2 mt-2" href="registro.php">Registrar</a>
            
            <p class="mt-5 mb-3 text-muted">&copy; 2017–2024</p>
        </form>
    </main>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
