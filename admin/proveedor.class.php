<?php
require_once(__DIR__."/sistema.class.php");

class Proveedor extends Sistema {
    function getAll() {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_proveedor, p.nombre, p.direccion, p.telefono, p.correo FROM proveedor p;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }

    function Insert($datos) {
        $this->connect();
        $stmt = $this->conn->prepare("INSERT INTO proveedor (nombre, direccion, telefono, correo) VALUES (:nombre, :direccion, :telefono, :correo);");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function validateProveedor($datos) {
        if(empty($datos['nombre'])){
            return false;
        }
        return true;
    }

    function Delete($id_proveedor) {
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM proveedor WHERE id_proveedor = :id_proveedor");
        $stmt->bindParam(':id_proveedor', $id_proveedor, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function Update($id_proveedor, $datos) {
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE proveedor SET nombre = :nombre, direccion = :direccion, telefono = :telefono, correo = :correo WHERE id_proveedor = :id_proveedor");
        $stmt->bindParam(':id_proveedor', $id_proveedor, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $datos['direccion'], PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
        $stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function getOne($id_proveedor) {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_proveedor, p.nombre, p.direccion, p.telefono, p.correo FROM proveedor p WHERE id_proveedor = :id_proveedor");
        $stmt->bindParam(':id_proveedor', $id_proveedor, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        if(isset($datos[0])){
            $this->setCount(count($datos));
            return $datos[0];
        }  
        return array();
    }    
}
?>
