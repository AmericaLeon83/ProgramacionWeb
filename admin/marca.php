<?php
include (__DIR__.'/marca.class.php');
$app=new Marca();
//$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$marca_id=(isset($_GET['marca_id']))?$_GET['marca_id']:null;
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($marca_id);
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='La marca fue eliminada correctamente';
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar la marca';
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/marca/index.php');
        break;
    case 'create':
        include(__DIR__.'/views/marca/form.php');
        break;
    case 'update':
        $datos=$app->getOne($marca_id);
        if(isset($datos["marca_id"])){
            include(__DIR__.'/views/marca/form.php');
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='La marca especificada no existe';
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/marca/index.php');
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='La marca se registró correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar la marca';
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/marca/index.php');
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($marca_id,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='La marca se actualizó correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar la marca';
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/marca/index.php');
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/marca/index.php');
    break;
}
include (__DIR__.'/views/footer.php');
?>
