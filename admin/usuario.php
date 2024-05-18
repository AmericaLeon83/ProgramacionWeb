<?php
include (__DIR__.'/usuario.class.php');
$app = new Usuario();
//$app->checkRol('administrador', true); // Puedes mantener esta línea si es relevante para tu aplicación
include (__DIR__.'/views/header.php');
$action = (isset($_GET['action'])) ? $_GET['action'] : null;
$id_usuario = (isset($_GET['id_usuario'])) ? $_GET['id_usuario'] : null;
$datos = array();
$alerta = array();
switch ($action) {
    case 'delete':
        $fila = $app->delete($id_usuario);
        if ($fila) {
            $alerta['tipo'] = "success";
            $alerta['mensaje'] = 'El usuario fue eliminado correctamente';
        } else {
            $alerta['tipo'] = "danger";
            $alerta['mensaje'] = 'No se pudo eliminar el usuario';
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/usuario/index.php');
        break;
    case 'create':
        include(__DIR__.'/views/usuario/form.php');
        break;
    case 'update':
        $datos = $app->getOne($id_usuario);
        if (!empty($datos)) {
            include(__DIR__.'/views/usuario/form.php');
        } else {
            $alerta['tipo'] = "danger";
            $alerta['mensaje'] = 'El usuario especificado no existe';
            $datos = $app->getAll();
            include(__DIR__.'/views/alert.php');
            include(__DIR__.'/views/usuario/index.php');
        }
        break;
    case 'save':
        $datos = $_POST;
        if ($app->insert($datos)) {
            $alerta['tipo'] = "success";
            $alerta['mensaje'] = 'El usuario se registró correctamente';
        } else {
            $alerta['tipo'] = "danger";
            $alerta['mensaje'] = 'No se pudo registrar el usuario';
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/usuario/index.php');
        break;
    case 'change':
        $datos = $_POST;
        if ($app->update($id_usuario, $datos)) {
            $alerta['tipo'] = "success";
            $alerta['mensaje'] = 'El usuario se actualizó correctamente';
        } else {
            $alerta['tipo'] = "danger";
            $alerta['mensaje'] = 'No se pudo actualizar el usuario';
        }
        $datos = $app->getAll();
        include(__DIR__.'/views/alert.php');
        include(__DIR__.'/views/usuario/index.php');
        break;
    default:
        $datos = $app->getAll();
        include(__DIR__.'/views/usuario/index.php');
        break;
}
include (__DIR__.'/views/footer.php');
?>
