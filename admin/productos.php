<?php
include(__DIR__.'/productos.class.php');
include(__DIR__.'/marca.class.php');
$app = new Producto(); // Asumiendo que la clase producto se llama Producto()
$appMarcas = new Marca();
//$app->checkRol('administrador', true);
$marcas = $appMarcas->getAll();
include(__DIR__.'/views/header.php');
$action = (isset($_GET['action'])) ? $_GET['action'] : null;
$id_producto = (isset($_GET['id_producto'])) ? $_GET['id_producto'] : null;
$datos = array();
$alerta= array();
switch ($action) {
    case 'delete':
        $fila = $app->delete($id_producto); // Asumiendo que el método para eliminar se llama delete()
        if ($fila) {
            $alerta['tipo']="success";
            $alerta['mensaje']="Producto eliminado correctamente";
        }else {
            $alerta['tipo']="danger";
            $alerta['mensaje']="No se pudo eliminar el producto";
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/producto/index.php');
        break;
    case 'create':       
        include(__DIR__.'/views/producto/form.php');
        break;
    case 'save':
        $datos = $_POST;
        $datos['foto']=$_FILES['foto']['name']; // Cambio de 'fotografia' a 'foto' para coincidir con la nueva tabla
        if ($app->insert($datos)) { // Asumiendo que el método para insertar se llama insert()
            $alerta['tipo']="success";
            $alerta['mensaje']="El producto se registró correctamente";
        }else {
            $alerta['tipo']="danger";
            $alerta['mensaje']="No se pudo registrar el producto";
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/producto/index.php');
        break;
    case 'update':
        $datos = $app->getOne($id_producto); // Asumiendo que el método para obtener un producto se llama getOne()
        if (isset($datos["id"])) { // Asumiendo que la columna de ID se llama 'id'
            include(__DIR__.'/views/producto/form.php');
        }else {
            $alerta['tipo']="danger";
            $alerta['mensaje']="No existe el producto especificado.";
            $datos = $app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/producto/index.php');
        }       
        break;
    case 'change':
        $datos = $_POST;
        if ($app->update($id_producto,$datos)) { // Asumiendo que el método para actualizar se llama update()
            $alerta['tipo']="success";
            $alerta['mensaje']="El producto se actualizó correctamente";
        }else {
            $alerta['tipo']="danger";
            $alerta['mensaje']="No se pudo actualizar el producto";
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/producto/index.php');
        break;
    default:
        $datos = $app->getAll();
        include(__DIR__.'/views/producto/index.php');
}
include(__DIR__.'/views/footer.php');
?>
