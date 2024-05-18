<?php
include (__DIR__.'/citas.class.php'); // Cambiar el nombre de la clase según el archivo correspondiente
$app=new Citas(); // Cambiar el nombre de la clase según la nueva tabla
$app->checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action'])) ? $_GET['action'] : null;
$id_citas=(isset($_GET['id_citas'])) ? $_GET['id_citas'] : null; // Cambiar la variable de ID según el nuevo nombre de la clave primaria
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
        $fila=$app->Delete($id_citas); // Cambiar la función Delete según la lógica de la clase
        if($fila){
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita fue eliminada correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo eliminar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); // Cambiar la vista según el nuevo nombre de la tabla
        break;
    case 'create':
        include(__DIR__.'/views/citas/form.php'); // Cambiar la vista según el nuevo nombre de la tabla
        break;
    case 'update':
        $datos=$app->getOne($id_citas); // Cambiar la función getOne según la lógica de la clase
        if(isset($datos["id_citas"])){
            include(__DIR__.'/views/citas/form.php'); // Cambiar la vista según el nuevo nombre de la tabla
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='La cita especificada no existe';
            $datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/citas/index.php'); // Cambiar la vista según el nuevo nombre de la tabla
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){ // Cambiar la función insert según la lógica de la clase
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita se registró correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); // Cambiar la vista según el nuevo nombre de la tabla
        break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_citas,$datos)){ // Cambiar la función Update según la lógica de la clase
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita se actualizó correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); // Cambiar la vista según el nuevo nombre de la tabla
        break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/citas/index.php'); // Cambiar la vista según el nuevo nombre de la tabla
        break;
}
include (__DIR__.'/views/footer.php');
?>
