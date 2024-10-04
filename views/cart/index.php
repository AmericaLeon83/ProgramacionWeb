<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cart-container {
            margin-top: 20px;
        }
        .cart-table img {
            max-width: 100px;
            border-radius: 5px;
        }
        .cart-total {
            font-size: 1.2em;
            font-weight: bold;
        }
        .btn-success {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container cart-container">
    <h2>Carrito de Compras</h2>
    <table class="table table-bordered table-striped cart-table">
        <thead class="table-dark">
        <tr>
            <th>Producto</th>
            <th>Nombre</th>
            <th>Precio Unitario</th>
            <th>Cantidad</th>
            <th>Precio Total</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $total = 0;
        foreach ($carrito as $id_producto => $cantidad):
            $dato = $web->getOne($id_producto);
            $precio_total_producto = $dato['precio'] * $cantidad;
            $total += $precio_total_producto;
            $_SESSION['total'] = $total;
            ?>
            <tr>
                <td><img class="img-fluid" src="uploads/productos/<?php echo htmlspecialchars($dato['fotografia']); ?>" alt="<?php echo htmlspecialchars($dato['producto']); ?>"></td>
                <td style="vertical-align: middle;"><?php echo htmlspecialchars($dato['producto']); ?></td>
                <td style="vertical-align: middle;">$<?php echo number_format($dato['precio'], 2); ?></td>
                <td style="vertical-align: middle;">
                    <input style="max-width: 75px; width: auto;" class="form-control" type="number" min="0" name="cantidad" value="<?php echo (int)$cantidad; ?>">
                </td>
                <td style="vertical-align: middle;">$<?php echo number_format($precio_total_producto, 2); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        <tfoot>
        <tr>
            <th colspan="4" class="text-end">Total:</th>
            <th>$<?php echo number_format($total, 2); ?></th>
        </tr>
        </tfoot>
    </table>
    <a href="checkout.php" class="btn btn-success">Pagar</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
