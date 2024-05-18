<?php
require_once(__DIR__."/sistema.class.php");

class Rol extends Sistema{
    function getAll(){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT r.id_rol, r.rol
        FROM rol r;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos =$stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }
    function Insert($datos){
        $this->connect();
        if($this->validateRol($datos)){
            $stmt=$this->conn->prepare("INSERT into rol (rol) 
            values (:rol); ");
            $stmt->bindParam(':rol',$datos['rol'] ,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        } else {
            return 0;
        }
    }

    function validateRol($datos){
        if(empty($datos['rol'])){
            return false;
        }
        return true;
    }

    function Delete($id_rol){
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM rol WHERE id_rol = :id_rol");
        $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function Update($id_rol,$datos){
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE rol
        SET  rol=:rol
        WHERE id_rol=:id_rol");
        $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
        $stmt->bindParam(':rol', $datos['rol'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($id_rol){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT r.id_rol, r.rol 
        FROM rol r
        WHERE id_rol = :id_rol");
        $stmt->bindParam(':id_rol', $id_rol, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos=array();
        $datos = $stmt->fetchAll();
        if(isset($datos[0])){
            $this->setCount(count($datos));
            return $datos[0];
        }  
        return array();
    }    
}
?>
