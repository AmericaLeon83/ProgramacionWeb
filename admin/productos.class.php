<?php
require_once(__DIR__."/sistema.class.php");

class Producto extends Sistema // Cambio de nombre de clase a "Producto" para que coincida con la convención de nombres de clases en PHP
{
    function getAll() {
        $this->conect();
        $stmt = $this->conn->prepare("SELECT id, nombre_producto, descripcion, precio, marca_id, foto FROM productos");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        $this->setCount(count($datos));
        return $datos;
    }
    

    function getOne($id_producto){
        $this->conect();
        $stmt = $this->conn->prepare("SELECT id, nombre_producto AS producto, precio, marca_id, foto
            FROM productos
            WHERE id=:id_producto;"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
        $stmt->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        if (isset($datos[0])) {
            $this->setCount(count($datos));
            return $datos[0];
        }
        return array();
    }

    function Insert($datos){
        $this->conect();
        $nombre_archivo = $this->upload("productos");
        if ($this->validateproducto($datos)) {
            if ($nombre_archivo) {
                $stmt = $this->conn->prepare("INSERT INTO productos
                    (nombre_producto, descripcion, precio, marca_id, foto)
                    VALUES (:nombre_producto, :descripcion, :precio, :marca_id, :foto);"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
                $stmt->bindParam(':foto', $nombre_archivo, PDO::PARAM_STR);
            } else {
                $stmt = $this->conn->prepare("INSERT INTO productos
                    (nombre_producto, descripcion, precio, marca_id)
                    VALUES (:nombre_producto, :descripcion, :precio, :marca_id);"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
            }
            $stmt->bindParam(':nombre_producto', $datos['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR); // Se asume que 'descripcion' es la descripción del producto
            $stmt->bindParam(':precio', $datos['precio'], PDO::PARAM_STR);
            $stmt->bindParam(':marca_id', $datos['marca_id'], PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->rowCount();
        }
        return 0;
    }

    function Delete($id_producto){
        $this->conect();
        $stmt = $this->conn->prepare("DELETE FROM productos
            WHERE id=:id_producto;"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
        $stmt->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function Update($id_producto, $datos){//datos es un array
        $this->conect();
        $nombre_archivo = $this->upload('productos');
        if ($nombre_archivo) {
            $stmt = $this->conn->prepare("UPDATE productos SET 
                nombre_producto=:nombre, descripcion=:descripcion, precio=:precio, marca_id=:marca_id, foto=:foto
                WHERE id=:id_producto;"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
            $stmt->bindParam(':foto', $nombre_archivo, PDO::PARAM_STR);
        } else {
            $stmt = $this->conn->prepare("UPDATE productos SET 
                nombre_producto=:nombre, descripcion=:descripcion, precio=:precio, marca_id=:marca_id
                WHERE id=:id_producto;"); // Cambio de nombres de columnas y tablas para coincidir con las nuevas tablas
        }
        $stmt->bindParam(':id_producto', $id_producto, PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':descripcion', $datos['descripcion'], PDO::PARAM_STR); // Se asume que 'descripcion' es la descripción del producto
        $stmt->bindParam(':precio', $datos['precio'], PDO::PARAM_STR);
        $stmt->bindParam(':marca_id', $datos['marca_id'], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function validateproducto($datos){
        if (empty($datos['nombre'])) {
            return false;
        }
        return true;
    }
}
?>
