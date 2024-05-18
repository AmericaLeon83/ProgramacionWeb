<?php
include (__DIR__.'/oftalmologo.class.php'); // Cambiado el nombre del archivo de clase
$app=new Oftalmologo(); // Cambiado el nombre de la instancia de la clase
$app-> checkRol('administrador', true);
include (__DIR__.'/views/header.php');
$action=(isset($_GET['action']))?$_GET['action']:null;
$id_oftalmologo=(isset($_GET['id_oftalmologo']))?$_GET['id_oftalmologo']:null; // Cambiado el nombre de la variable
$datos=array();
$alerta=array();
switch($action){
    case 'delete':
      $fila=$app->Delete($id_oftalmologo); // Cambiado el nombre del parámetro de la función Delete
      if($fila){
        $alerta['tipo']="success";
        $alerta['mensaje']='El oftalmólogo fue eliminado correctamente'; // Modificado el mensaje
      }else{
        $alerta['tipo']="danger";
        $alerta['mensaje']='No se pudo eliminar el oftalmólogo'; // Modificado el mensaje
      }
      $datos=$app->getAll();
      include(__DIR__.'/views/alert.php');
      include(__DIR__.'/views/oftalmologo/index.php'); // Cambiado el nombre del archivo de vista
        break;
    case 'create':
        include(__DIR__.'/views/oftalmologo/form.php'); // Cambiado el nombre del archivo de vista
        break;
    case 'update':
        $datos=$app->getOne($id_oftalmologo); // Cambiado el nombre del parámetro de la función getOne
        if(isset($datos["id_oftalmologo"])){
            include(__DIR__.'/views/oftalmologo/form.php'); // Cambiado el nombre del archivo de vista
        }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='El oftalmólogo especificado no existe'; // Modificado el mensaje
            $datos=$datos=$app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/oftalmologo/index.php'); // Cambiado el nombre del archivo de vista
        }
        break;
    case 'save':
        $datos=$_POST;
        if($app->insert($datos)){
            $alerta['tipo']="success";
            $alerta['mensaje']='El oftalmólogo se registró correctamente'; // Modificado el mensaje
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo registrar el oftalmólogo'; // Modificado el mensaje
          }
        $datos=$datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/oftalmologo/index.php'); // Cambiado el nombre del archivo de vista
    break;    
    case 'change':
        $datos=$_POST;
        if($app->Update($id_oftalmologo,$datos)){ // Cambiado el nombre del parámetro de la función Update
            $alerta['tipo']="success";
            $alerta['mensaje']='El oftalmólogo se actualizó correctamente'; // Modificado el mensaje
          }else{
            $alerta['tipo']="danger";
            $alerta['mensaje']='No se pudo actualizar el oftalmólogo'; // Modificado el mensaje
          }
        $datos=$app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/oftalmologo/index.php'); // Cambiado el nombre del archivo de vista
    break;
    default:
        $datos=$app->getAll();
        include(__DIR__.'/views/oftalmologo/index.php'); // Cambiado el nombre del archivo de vista
    break;
}
include (__DIR__.'/views/footer.php');
?>
