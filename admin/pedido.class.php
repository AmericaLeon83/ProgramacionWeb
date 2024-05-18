<?php
require_once(__DIR__."/sistema.class.php");
class Pedido extends Sistema{
    function getAll(){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_pedido, p.total, p.fecha_pedido, p.estado_pedido
        FROM pedido p;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();  
        $this->setCount(count($datos));
        return $datos;
    }
    
    function Insert($datos){
        $this->connect();
        $stmt=$this->conn->prepare("INSERT into pedido (total, fecha_pedido, estado_pedido) 
        values (:total, :fecha_pedido, :estado_pedido); ");
        $stmt->bindParam(':total', $datos['total'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_pedido', $datos['fecha_pedido'], PDO::PARAM_STR);
        $stmt->bindParam(':estado_pedido', $datos['estado_pedido'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function Delete($id_pedido){
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM pedido WHERE id_pedido = :id_pedido");
        $stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function Update($id_pedido, $datos){
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE pedido
        SET total=:total, fecha_pedido=:fecha_pedido, estado_pedido=:estado_pedido
        WHERE id_pedido=:id_pedido");
        $stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
        $stmt->bindParam(':total', $datos['total'], PDO::PARAM_STR);
        $stmt->bindParam(':fecha_pedido', $datos['fecha_pedido'], PDO::PARAM_STR);
        $stmt->bindParam(':estado_pedido', $datos['estado_pedido'], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->rowCount();
    }
    
    function getOne($id_pedido){
        $this->connect();
        $stmt = $this->conn->prepare("SELECT p.id_pedido, p.total, p.fecha_pedido, p.estado_pedido 
        FROM pedido p
        WHERE id_pedido = :id_pedido");
        $stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
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
