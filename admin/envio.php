<?php
include (__DIR__.'/envio.class.php'); // Cambio de clase incluida
$app=new Envio(); // Cambio de instancia de clase
$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_envio=(isset($_GET['id_envio']))?$_GET['id_envio']:null; // Cambio de nombre de variable
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_envio); // Cambio de función
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El envío fue eliminado correctamente'; // Cambio de mensaje
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el envío'; // Cambio de mensaje
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/envio/index.php'); // Cambio de ruta de vista
        break;
    case 'create':
        include(__DIR__.'/views/envio/form.php'); // Cambio de ruta de vista
        break;
    case 'update':
        $datos=$app->getOne($id_envio);
        if(isset($datos["id_envio"])){
            include(__DIR__.'/views/envio/form.php'); // Cambio de ruta de vista
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El envío especificado no existe'; // Cambio de mensaje
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/envio/index.php'); // Cambio de ruta de vista
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El envío se registró correctamente'; // Cambio de mensaje
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el envío'; // Cambio de mensaje
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/envio/index.php'); // Cambio de ruta de vista
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_envio,$datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El envío se actualizó correctamente'; // Cambio de mensaje
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el envío'; // Cambio de mensaje
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/envio/index.php'); // Cambio de ruta de vista
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/envio/index.php'); // Cambio de ruta de vista
    break;
}
include (__DIR__.'/views/footer.php');
?>
