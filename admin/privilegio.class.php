<?php
require_once(__DIR__."/sistema.class.php");

class Privilegio extends Sistema { // Cambio de 'Marca' a 'Privilegio'
    function getAll() {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_privilegio, p.privilegio
        FROM privilegio p;"); // Cambio de 'marca m' a 'privilegio p'
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }

    function Insert($datos) {
        $this->connect();
        if ($this->validatePrivilegio($datos)) {
            $stmt = $this->conn->prepare("INSERT into privilegio (privilegio) 
            values (:privilegio); ");
            $stmt->bindParam(':privilegio', $datos['privilegio'], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        } else {
            return 0;
        }
    }

    function validatePrivilegio($datos) {
        if (empty($datos['privilegio'])) {
            return false;
        }
        return true;
    }

    function Delete($id_privilegio) {
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM privilegio WHERE id_privilegio = :id_privilegio");
        $stmt->bindParam(':id_privilegio', $id_privilegio, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function Update($id_privilegio, $datos) {
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE privilegio
        SET  privilegio = :privilegio
        WHERE id_privilegio = :id_privilegio");
        $stmt->bindParam(':id_privilegio', $id_privilegio, PDO::PARAM_INT);
        $stmt->bindParam(':privilegio', $datos['privilegio'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($id_privilegio) {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_privilegio, p.privilegio
        FROM privilegio p
        WHERE id_privilegio = :id_privilegio");
        $stmt->bindParam(':id_privilegio', $id_privilegio, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = array();
        $datos = $stmt->fetchAll();
        if (isset($datos[0])) {
            $this->setCount(count($datos));
            return $datos[0];
        }  
        return array();
    }    
}
?>
