<?php
include __DIR__ . '\\admin\\productos.class.php';
$web = new Productos();
$datos = $web->getAll();

// Filtrar productos que son lentes y con precio menor a 200 pesos
$productos_filtrados = array_filter($datos, function($producto) {
    return strpos(strtolower($producto['producto']), 'lentes') !== false && $producto['precio'] < 200;
});

include __DIR__ . '/header.php';
?>

<div class="container">
    <div class="row justify-content-center"> <!-- Alinea el contenido al centro horizontalmente -->
        <div class="col">
             <!-- Imagen publicitaria -->
            <img src="images/descuento.png" class="img-fluid mt-5" alt="Imagen publicitaria">
        </div>
    </div>
</div>

<?php
// Incluye la vista de productos con los datos filtrados
$datos = $productos_filtrados; 
include __DIR__ . '/views/productos/indexD.php';


include __DIR__. '/footer.php';
?>
