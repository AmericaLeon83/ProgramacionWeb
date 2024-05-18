<?php
require_once(__DIR__."/sistema.class.php");
class Oftalmologo extends Sistema{ // Cambiado el nombre de la clase
    function getAll(){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT o.id_oftalmologo, o.nombre, o.apellido, o.especialidad, o.horario_disponible
        FROM oftalmologo o;"); // Cambiado la consulta SQL
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos =$stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }
    function Insert($datos){
        $this->connect();
        // Aquí puedes agregar la lógica para subir la fotografía si es necesario
        if($this->validateOftalmologo($datos)){
            $stmt=$this->conn->prepare("INSERT into oftalmologo (nombre, apellido, especialidad, horario_disponible) 
            values (:nombre, :apellido, :especialidad, :horario_disponible); "); // Cambiado la consulta SQL
            $stmt->bindParam(':nombre', $datos['nombre'] ,PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $datos['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':especialidad', $datos['especialidad'], PDO::PARAM_STR);
            $stmt->bindParam(':horario_disponible', $datos['horario_disponible'], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        } else {
            return 0;
        }
    }

    function validateOftalmologo($datos){
        // Puedes agregar aquí la lógica de validación para los datos del oftalmólogo
        if(empty($datos['nombre']) || empty($datos['especialidad'])){
            return false;
        }
        return true;
    }

    function Delete($id_oftalmologo){ // Cambiado el nombre del parámetro
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM oftalmologo WHERE id_oftalmologo = :id_oftalmologo"); // Cambiado la tabla y el nombre del campo
        $stmt->bindParam(':id_oftalmologo', $id_oftalmologo, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function Update($id_oftalmologo, $datos){ // Cambiado el nombre del parámetro
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE oftalmologo
        SET nombre=:nombre, apellido=:apellido, especialidad=:especialidad, horario_disponible=:horario_disponible
        WHERE id_oftalmologo=:id_oftalmologo"); // Cambiado la tabla y los nombres de los campos
        $stmt->bindParam(':id_oftalmologo', $id_oftalmologo, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':especialidad', $datos['especialidad'], PDO::PARAM_STR);
        $stmt->bindParam(':horario_disponible', $datos['horario_disponible'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($id_oftalmologo){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT o.id_oftalmologo, o.nombre, o.apellido, o.especialidad, o.horario_disponible
        FROM oftalmologo o
        WHERE id_oftalmologo = :id_oftalmologo"); // Cambiado la tabla y el nombre del campo
        $stmt->bindParam(':id_oftalmologo', $id_oftalmologo, PDO::PARAM_INT);
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
