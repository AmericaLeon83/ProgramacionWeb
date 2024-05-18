<?php
require_once(__DIR__."/sistema.class.php");
class Marca extends Sistema{
    function getAll(){
        $this->conect();
        $stmt = $this->conn->prepare("SELECT m.marca_id, m.nombre_marca
        FROM marcas m;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos =$stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }
    function Insert($datos){
        $this->conect();
        if($this->validateMarca($datos)){
            $stmt=$this->conn->prepare("INSERT into marcas (marca_id, nombre_marca) 
            values (:marca_id, :nombre_marca); ");
            $stmt->bindParam(':marca_id', $datos['marca_id'] ,PDO::PARAM_INT);
            $stmt->bindParam(':nombre_marca', $datos['nombre_marca'], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        }else{
            return 0;
        }
    }

    function validateMarca($datos){
        if(empty($datos['nombre_marca'])){
            return false;
        }
        return true;
    }

    function Delete($marca_id){
        $this->conect();
        $stmt = $this->conn->prepare("DELETE FROM marcas WHERE marca_id = :marca_id");
        $stmt->bindParam(':marca_id', $marca_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function Update($marca_id,$datos){
        $this->conect();
        $stmt = $this->conn->prepare("UPDATE marcas
        SET  nombre_marca=:nombre_marca
        WHERE marca_id=:marca_id");
        $stmt->bindParam(':marca_id', $marca_id, PDO::PARAM_INT);
        $stmt->bindParam(':nombre_marca', $datos['nombre_marca'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($marca_id){
        $this->conect();
        $stmt = $this->conn->prepare("SELECT m.marca_id, m.nombre_marca 
        FROM marcas m
        WHERE marca_id = :marca_id");
        $stmt->bindParam(':marca_id', $marca_id, PDO::PARAM_INT);
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
