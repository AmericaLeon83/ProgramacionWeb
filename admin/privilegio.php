<?php
include (__DIR__.'/privilegio.class.php'); 
$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_privilegio=(isset($_GET['id_privilegio']))?$_GET['id_privilegio']:null; 
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_privilegio); 
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El privilegio fue eliminado correctamente'; 
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el privilegio'; 
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/privilegio/index.php'); 
        break;
        
    case 'create':
        include(__DIR__.'/views/privilegio/form.php'); 
        break;

    case 'update':
        $datos=$app->getOne($id_privilegio); 
        if(isset($datos["id_privilegio"])){
            include(__DIR__.'/views/privilegio/form.php'); 
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El privilegio especificado no existe'; 
            $datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/privilegio/index.php'); 
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El privilegio se registró correctamente'; 
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el privilegio'; 
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/privilegio/index.php'); 
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_privilegio,$datos)){ 
            $alerta['tipo']="success";
            $alerta['mensaje']='El privilegio se actualizó correctamente'; 
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el privilegio'; 
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/privilegio/index.php'); 
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/privilegio/index.php'); 
    break;

}
include (__DIR__.'/views/footer.php');
?>
