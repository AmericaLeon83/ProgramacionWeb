<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar sesión - Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://media.licdn.com/dms/image/C4D1BAQEyoqPqPOTxDA/company-background_1536_768/0/1583086321656?e=2147483647&v=beta&t=WMn7QV0bSRb90UhTIVkppZUPlZ_tPsDfgcZQ2gFb0AA'); /* URL de la imagen de fondo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .form-signin {
            background-color: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
        }
        .form-floating label {
            color: #ddd;
        }
        .btn-primary {
            background-color: #ff4081;
            border-color: #ff4081;
        }
        .btn-primary:hover {
            background-color: #e91e63;
            border-color: #e91e63;
        }
        .form-check-label, .text-body-secondary {
            color: #bbb;
        }
        a {
            color: #ff4081;
        }
        a:hover {
            color: #e91e63;
        }
    </style>
</head>
<body>
    <main class="form-signin text-center">
        <form action="login.php?action=login" method="post">
            <img class="mb-4" src="../images/logoo.png" alt="Logo" width="260" height="95">
            <h1 class="h3 mb-3 fw-normal">Iniciar sesión - Administrador</h1>
            <div class="form-floating">
                <input type="email" name="correo" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Correo electrónico</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
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
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2024</p>
        </form>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
