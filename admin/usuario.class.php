<?php
require_once(__DIR__."/sistema.class.php");

class Usuario extends Sistema {
    function getAll() {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_usuario, correo FROM usuario");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        $this->setCount(count($datos));
        return $datos;
    }

    function insert($datos) {
        $this->connect();
        if ($this->validateUsuario($datos)) {
            $stmt = $this->conn->prepare("INSERT INTO usuario (correo, password) VALUES (:correo, :password)");
            $stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
            $stmt->bindParam(':password', $datos['password'], PDO::PARAM_STR); // Agregado para insertar la contraseña
            $stmt->execute();
            return $stmt->rowCount();
        } else {
            return 0;
        }
    }

    function validateUsuario($datos) {
        if (empty($datos['correo']) || empty($datos['password'])) {
            return false;
        }
        return true;
    }

    function delete($id_usuario) {
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM usuario WHERE id_usuario = :id_usuario");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function update($id_usuario, $datos) {
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE usuario SET correo=:correo, password=:password WHERE id_usuario=:id_usuario");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->bindParam(':correo', $datos['correo'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $datos['password'], PDO::PARAM_STR); // Agregado para actualizar la contraseña
        $stmt->execute();
        return $stmt->rowCount();
    }

    function getOne($id_usuario) {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_usuario, correo FROM usuario WHERE id_usuario = :id_usuario");
        $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        if (isset($datos[0])) {
            $this->setCount(count($datos));
            return $datos[0];
        }
        return array();
    }
}
?>
