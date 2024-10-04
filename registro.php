<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-image: url('images/publicidad3.png'); 
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    .form-signin {
        max-width: 400px;
        padding: 15px;
        margin: auto;
        background-color: rgba(0, 128, 128, 0.6); 
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input[type="text"],
    .form-signin input[type="email"],
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .form-signin .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .form-signin .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .form-signin img {
        margin-bottom: 20px;
    }

    .form-signin a {
        color: #007bff;
    }

    .form-signin a:hover {
        color: #0056b3;
    }

    .form-signin h1 {
        color: #000000; 
    }
</style>

<main class="form-signin">
    <form action="register.php" method="post">
        <img class="mb-4" src="images/logoo.png" alt="Logo" width="300" height="100">
        <h1 class="h3 mb-3 fw-normal">Registro</h1>

        <div class="form-floating mb-2">
            <input type="text" name="nombre" class="form-control" id="floatingNombre" placeholder="Nombre" required>
            <label for="floatingNombre">Nombre</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="primer_apellido" class="form-control" id="floatingPrimerApellido" placeholder="Primer apellido" required>
            <label for="floatingPrimerApellido">Primer apellido</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="segundo_apellido" class="form-control" id="floatingSegundoApellido" placeholder="Segundo apellido" required>
            <label for="floatingSegundoApellido">Segundo apellido</label>
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="rfc" class="form-control" id="floatingRFC" placeholder="RFC" required>
            <label for="floatingRFC">RFC</label>
        </div>
        <div class="form-floating mb-2">
            <input type="email" name="correo" class="form-control" id="floatingCorreo" placeholder="name@example.com" required>
            <label for="floatingCorreo">Correo electrónico</label>
        </div>
        <div class="form-floating mb-2">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="mb-3">
            ¿Ya tienes cuenta? Inicia sesión <a href="login.php">aquí</a>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Registrarme</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
    </form>
</main>
</body>
</html>
