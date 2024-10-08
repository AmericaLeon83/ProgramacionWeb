<?php

namespace Kawschool;

class Cliente{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO `clientes`(`nombre_cliente`, `apellidos`, `email`, `telefono`, `comentario`) 
        VALUES (:nombre_cliente,:apellidos,:email,:telefono,:comentario)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":nombre_cliente" => $_params['nombre_cliente'],
            ":apellidos" => $_params['apellidos'],
            ":email" => $_params['email'],
            ":telefono" => $_params['telefono'],
            ":comentario" => $_params['comentario']
        );

        if($resultado->execute($_array))
            return $this->cn->lastInsertId();

        return false;
    }


}