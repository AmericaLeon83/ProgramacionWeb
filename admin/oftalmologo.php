<?php
include (__DIR__.'/oftalmologo.class.php');
$app=new Oftalmologo();
$app->checkRol('Administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_oftalmologo=(isset($_GET['id_oftalmologo']))?$_GET['id_oftalmologo']:null;
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_oftalmologo);
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El oftalmólogo fue eliminado correctamente';
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el oftalmólogo';
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/oftalmologo/index.php');
        break;
    case 'create':
        include(__DIR__.'/views/oftalmologo/form.php');
        break;
    case 'update':
        $datos=$app->getOne($id_oftalmologo);
        if(isset($datos["id_oftalmologo"])){
            include(__DIR__.'/views/oftalmologo/form.php');
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El oftalmólogo especificado no existe';
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/oftalmologo/index.php');
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El oftalmólogo se registró correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el oftalmólogo';
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/oftalmologo/index.php');
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_oftalmologo,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El oftalmólogo se actualizó correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el oftalmólogo';
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/oftalmologo/index.php');
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/oftalmologo/index.php');
    break;
}
include (__DIR__.'/views/footer.php');
?>
