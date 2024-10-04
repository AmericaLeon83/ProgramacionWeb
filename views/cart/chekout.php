<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forma de Pago</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('images/lentesazul.png') no-repeat center center fixed;
            background-size: cover;
            color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            background: rgba(52, 58, 64, 0.9);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
            margin-top: 5%; /* Ajuste del margen superior */
        }
        h1 {
            color: #f8f9fa;
            text-align: center;
        }
        .form-floating label {
            color: #adb5bd;
        }
        .form-control {
            background-color: #495057;
            border-color: #495057;
            color: #f8f9fa;
        }
        .form-control::placeholder {
            color: #6c757d;
        }
        .form-control:focus {
            background-color: #495057;
            border-color: #ced4da;
        }
        .btn-warning, .btn-danger, .btn-success {
            margin-right: 0.5rem;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
            color: #212529;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #f8f9fa;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
            color: #f8f9fa;
        }
        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            color: #f8f9fa;
        }
        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
            color: #f8f9fa;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-4">Forma de pago</h1>
    <form action="invoice.php" method="post">
        <div class="row">
            <div class="col">
                <div class="form-floating mb-3">
                    <input name="nombre_tarjeta" type="text" class="form-control" id="nombre" placeholder="Nombre">
                    <label for="nombre">Nombre de la tarjeta</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="tarjeta" type="text" class="form-control" id="tarjeta" placeholder="No. de tarjeta">
                    <label for="tarjeta">No. de tarjeta</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="fecha_expiracion" type="text" class="form-control" id="fechaExpiracion" placeholder="MM/AA">
                    <label for="fechaExpiracion">Fecha de expiración (MM/AA)</label>
                </div>
                <div class="form-floating mb-3">
                    <input name="cvv" type="password" class="form-control" id="cvv" placeholder="CVV" maxlength="4">
                    <label for="cvv">CVV</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="productos.php" class="btn btn-warning">Seguir comprando</a>
                <a href="#" class="btn btn-danger">Vaciar carrito</a>
                <button name="invoice" type="submit" class="btn btn-success" value="Confirmar pago">Confirmar Pago</button>
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="views/cart/js/script.js"></script>
</body>
</html>
