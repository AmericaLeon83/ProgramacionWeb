<?php
include __DIR__ . '/admin/productos.class.php';
$web = new Productos();
$datos = array();
$datos = $web->getAll();
$bosch = $web->marketplaceBosch();
include __DIR__ . '/header.php';
?>

<div class="container">
    <div class="row justify-content-center"> 
        <div class="col">
           
            <img src="images/publicidad3.png" class="img-fluid mt-5" alt="Imagen publicitaria">
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center"> 
        <div class="col">
          
            <a href="descuentos.php">
                <img src="images/clic.png" class="img-fluid mt-5" alt="Imagen publicitaria">
            </a>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/views/productos/index.php';
include __DIR__. '/footer.php';
?>
