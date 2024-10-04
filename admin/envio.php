<?php
include (__DIR__.'/envio.class.php'); 
$app=new Envio();
$app->checkRol('Administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_envio=(isset($_GET['id_envio']))?$_GET['id_envio']:null; 
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_envio); 
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El envío fue eliminado correctamente'; 
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el envío :c'; 
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/envio/index.php'); 
        break;
    case 'create':
        include(__DIR__.'/views/envio/form.php'); 
        break;
    case 'update':
        $datos=$app->getOne($id_envio);
        if(isset($datos["id_envio"])){
            include(__DIR__.'/views/envio/form.php'); 
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El envío especificado no existe'; 
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/envio/index.php'); 
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El envío se registró correctamente'; 
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el envío'; 
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/envio/index.php'); 
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_envio,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El envío se actualizó correctamente'; 
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el envío'; 
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/envio/index.php'); 
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/envio/index.php'); 
    break;
}
include (__DIR__.'/views/footer.php');
?>
