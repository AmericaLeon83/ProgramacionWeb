<?php
include (__DIR__.'/citas.class.php'); 
$app=new Citas(); 
$app->checkRol('Administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action'])) ? $_GET['action'] : null;
$id_citas=(isset($_GET['id_citas'])) ? $_GET['id_citas'] : null; 
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
        $fila=$app->Delete($id_citas); 
        if($fila){
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita fue eliminada correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo eliminar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); 
        break;
    case 'create':
        include(__DIR__.'/views/citas/form.php'); 
        break;
    case 'update':
        $datos=$app->getOne($id_citas); 
        if(isset($datos["id_citas"])){
            include(__DIR__.'/views/citas/form.php'); 
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='La cita especificada no existe';
            $datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/citas/index.php'); 
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){ 
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita se registró correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); 
        break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_citas,$datos)){ 
            $alerta['tipo']="success";
            $alerta['mensaje']='La cita se actualizó correctamente';
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar la cita';
        }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/citas/index.php'); 
        break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/citas/index.php'); 
        break;
}
include (__DIR__.'/views/footer.php');
?>
