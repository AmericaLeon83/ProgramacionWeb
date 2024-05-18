<?php
include (__DIR__.'/pedido.class.php');
$app=new Pedido();
$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_pedido=(isset($_GET['id_pedido']))?$_GET['id_pedido']:null;
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_pedido);
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El pedido fue eliminado correctamente';
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el pedido';
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/pedido/index.php');
        break;
    case 'create':
        include(__DIR__.'/views/pedido/form.php');
        break;
    case 'update':
        $datos=$app->getOne($id_pedido);
        if(isset($datos["id_pedido"])){
            include(__DIR__.'/views/pedido/form.php');
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El pedido especificado no existe';
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/pedido/index.php');
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El pedido se registró correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el pedido';
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/pedido/index.php');
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_pedido,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El pedido se actualizó correctamente';
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el pedido';
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/pedido/index.php');
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/pedido/index.php');
    break;
}
include (__DIR__.'/views/footer.php');
?>
