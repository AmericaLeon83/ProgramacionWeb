<?php
include(__DIR__.'/sistema.class.php');
$app = new Sistema();
$action=(isset($_GET['action']))?$_GET['action']:null;
require_once(__DIR__.'/views/headerSinMenu.php');
switch ($action){
    case 'logout':
        $app->logout();
        $tipo = 'success';
        $mensaje='ha salido del sistema correctamente';
        $app->alert($tipo,$mensaje);
        break;
    case 'login':
        $correo=$_POST['correo'];
        $contrasena=$_POST['contrasena'];
        $login = $app->login($correo,$contrasena);
        if($login){
            header('Location: index.php');
        }else{
            $tipo='danger';
            $mensaje='Usuario o contraseña incorrectos';
            $app->alert($tipo,$mensaje);
        }
        break;
    case 'forgot':
        include __DIR__.'/views/login/forgot.php';
        break;

    case 'reset':
        $correo=$_POST['correo'];
        $reset = $app->reset($correo);
        if($reset){
            $tipo='success';
            $mensaje='Se ha enviado un correo para recuperar la contraseña';
            $app->alert($tipo,$mensaje);
        }else{
            $tipo='danger';
            $mensaje='No se pudo enviar el correo';
            $app->alert($tipo,$mensaje);
        }
        break;
        case 'recovery':
            if(isset($_GET['token'])){
                $token=$_GET['token'];
                if($app->recovery($token)){
                    if(isset($_POST['contrasena'])){
                        $contrasena = $_POST['contrasena'];
                        if($app->recovery($token,$contrasena)){
                            $tipo='success';
                            $mensaje='Contraseña cambiada correctamente';
                            $app->alert($tipo,$mensaje);
                            include __DIR__.'/views/login/index.php';
                            die;
                        }
                        else{
                            $tipo='danger';
                            $mensaje='No se pudo cambiar la contraseña';
                            $app->alert($tipo,$mensaje);
                            die;
                        }
                    }
                    include __DIR__.'/views/login/recovery.php';
                    die;
                }
                $mensaje = 'token no valido';
                $tipo = 'danger';
                $app->alert($tipo,$mensaje);
            }	
    default:
        include __DIR__.'/views/login/index.php';
        break;
}

// $login = $app->login('luislao@itcelaya.edu.mx','123');
// $x=$app->checkRol('Administrador',true);
// var_dump($x);
// $app->checkRol('Administrador');
// echo '<pre>';
// var_dump($login);
// print_r($_SESSION);
?>