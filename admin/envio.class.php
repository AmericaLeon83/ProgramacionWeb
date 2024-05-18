<?php
require_once(__DIR__."/sistema.class.php");

class Envio extends Sistema { // Cambio de nombre de clase
    function getAll() {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT e.id_envio, e.metodo_envio, e.fecha_envio, e.fecha_entrega, e.estado_envio
                                      FROM envio e;"); // Cambio de consulta SQL
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }

    function insert($datos) { // Cambio de nombre de función
        $this->connect();
        // Aquí va la lógica para subir y validar la fotografía, si es necesario
        $stmt = $this->conn->prepare("INSERT INTO envio (metodo_envio, fecha_envio, fecha_entrega, estado_envio) 
                                      VALUES (:metodo_envio, :fecha_envio, :fecha_entrega, :estado_envio); ");
        $stmt->bindParam(':metodo_envio', $datos['metodo_envio'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_envio', $datos['fecha_envio'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_entrega', $datos['fecha_entrega'], PDO::PARAM_STR);
        $stmt->bindParam(':estado_envio', $datos['estado_envio'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function delete($id_envio) { // Cambio de nombre de función y de variable
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM envio WHERE id_envio = :id_envio"); // Cambio de consulta SQL
        $stmt->bindParam(':id_envio', $id_envio, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function update($id_envio, $datos) { // Cambio de nombre de función y de variable
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE envio
                                      SET metodo_envio = :metodo_envio,
                                          fecha_envio = :fecha_envio,
                                          fecha_entrega = :fecha_entrega,
                                          estado_envio = :estado_envio
                                      WHERE id_envio = :id_envio");
        $stmt->bindParam(':id_envio', $id_envio, PDO::PARAM_INT);
        $stmt->bindParam(':metodo_envio', $datos['metodo_envio'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_envio', $datos['fecha_envio'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_entrega', $datos['fecha_entrega'], PDO::PARAM_STR);
        $stmt->bindParam(':estado_envio', $datos['estado_envio'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($id_envio) { // Cambio de nombre de función y de variable
        $this->connect();
        $stmt = $this->conn->prepare("SELECT e.id_envio, e.metodo_envio, e.fecha_envio, e.fecha_entrega, e.estado_envio
                                      FROM envio e
                                      WHERE id_envio = :id_envio");
        $stmt->bindParam(':id_envio', $id_envio, PDO::PARAM_INT);
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
