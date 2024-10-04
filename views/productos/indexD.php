<!-- Productos con descuento -->
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4">Productos En Oferta</h1>
            <p class="lead">Se han encontrado <?php echo count($datos); ?> productos</p>
        </div>
    </div>
    <div class="row">
        <?php foreach ($datos as $producto) : ?>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="uploads/productos/<?php echo $producto['fotografia']; ?>"
                         alt="<?php echo $producto['producto']; ?>" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $producto['producto']; ?></h5>
                        <p class="badge bg-primary">$<?php echo $producto['precio']; ?> MXN</p>
                        <form action="cart-add.php" method="get">
                            <div class="mb-3">
                                <label for="cantidad<?php echo $producto['id_producto']; ?>" class="form-label">Cantidad</label>
                                <input type="number" id="cantidad<?php echo $producto['id_producto']; ?>" name="cantidad" class="form-control" min="1" required>
                            </div>
                            <input type="hidden" name="id_producto" value="<?php echo $producto['id_producto']; ?>">
                            <button type="submit" class="btn btn-success w-100"><i class="fa fa-shopping-cart"></i> Agregar al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
    <div class="row justify-content-center"> 
        <div class="col">
             <!-- Imagen publicitaria -->
            <img src="images/entregas.png" class="img-fluid mt-5" alt="Imagen publicitaria">
        </div>
    </div>
</div>
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center">Productos en Marketplace</h2>
            <table class="table table-striped table-hover mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Nombre del producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Marca</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bosch as $datoBosch) : ?>
                        <tr>
                            <th scope="row"><?php echo $datoBosch->producto; ?></th>
                            <td>$<?php echo $datoBosch->precio; ?> MXN</td>
                            <td><?php echo $datoBosch->marca; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
