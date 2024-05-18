<?php
include (__DIR__.'/proveedor.class.php'); // Cambiar a proveedor.class.php
$app=new Proveedor(); // Cambiar a Proveedor
$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_proveedor=(isset($_GET['id_proveedor']))?$_GET['id_proveedor']:null; // Cambiar a id_proveedor
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_proveedor); // Cambiar a Delete
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El proveedor fue eliminado correctamente'; // Cambiar a proveedor
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el proveedor'; // Cambiar a proveedor
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/proveedor/index.php'); // Cambiar a proveedor
        break;
    case 'create':
        include(__DIR__.'/views/proveedor/form.php'); // Cambiar a proveedor
        break;
    case 'update':
        $datos=$app->getOne($id_proveedor); // Cambiar a id_proveedor
        if(isset($datos["id_proveedor"])){
            include(__DIR__.'/views/proveedor/form.php'); // Cambiar a proveedor
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El proveedor especificado no existe'; // Cambiar a proveedor
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/proveedor/index.php'); // Cambiar a proveedor
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El proveedor se registró correctamente'; // Cambiar a proveedor
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el proveedor'; // Cambiar a proveedor
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/proveedor/index.php'); // Cambiar a proveedor
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_proveedor,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El proveedor se actualizó correctamente'; // Cambiar a proveedor
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el proveedor'; // Cambiar a proveedor
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/proveedor/index.php'); // Cambiar a proveedor
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/proveedor/index.php'); // Cambiar a proveedor
    break;
}
include (__DIR__.'/views/footer.php');
?>
