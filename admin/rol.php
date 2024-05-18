<?php
include (__DIR__.'/rol.class.php');
$app=new Rol();
//$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_rol=(isset($_GET['id_rol']))?$_GET['id_rol']:null;
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_rol);
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El rol fue eliminado correctamente';
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el rol';
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/rol/index.php');
        break;
    case 'create':
        include(__DIR__.'/views/rol/form.php');
        break;
    case 'update':
        $datos=$app->getOne($id_rol);
        if(isset($datos["id_rol"])){
            include(__DIR__.'/views/rol/form.php');
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El rol especificado no existe';
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/rol/index.php');
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El rol se registró correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el rol';
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/rol/index.php');
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_rol,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El rol se actualizó correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el rol';
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/rol/index.php');
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/rol/index.php');
    break;
}
include (__DIR__.'/views/footer.php');
?>
