<?php
require_once __DIR__ . '/sistema.class.php';

class Citas extends Sistema
{
    function getAll()
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_citas, nombre, apellido, email, telefono, fecha_de_cita, hora_de_cita FROM citas;");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = $stmt->fetchAll();
        $this->setCount(count($datos));
        return $datos;
    }

    function getOne($id_citas)
    {
        $this->connect();
        $stmt = $this->conn->prepare("SELECT id_citas, nombre, apellido, email, telefono, fecha_de_cita, hora_de_cita FROM citas WHERE id_citas = :id_citas;");
        $stmt->bindParam(':id_citas', $id_citas, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $datos = array();
        $datos = $stmt->fetchAll();
        if (isset($datos[0])) {
            $this->setCount(count($datos));
            return $datos[0];
        }
        return $datos;
    }

    function insert($datos)
    {
        $this->connect();
        if ($this->validateCita($datos)) {
            $stmt = $this->conn->prepare("INSERT INTO citas(nombre, apellido, email, telefono, fecha_de_cita, hora_de_cita) VALUES (:nombre, :apellido, :email, :telefono, :fecha_de_cita, :hora_de_cita);");
            $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
            $stmt->bindParam(':apellido', $datos['apellido'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $datos['email'], PDO::PARAM_STR);
            $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);
            $stmt->bindParam(':fecha_de_cita', $datos['fecha_de_cita'], PDO::PARAM_STR);
            $stmt->bindParam(':hora_de_cita', $datos['hora_de_cita'], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount();
        }
        return 0;
    }

    function delete($id_citas)
    {
        $this->connect();
        $stmt = $this->conn->prepare("DELETE FROM citas WHERE id_citas = :id_citas;");
        $stmt->bindParam(':id_citas', $id_citas, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->rowCount();
        return $result;
    }

    function update($id_citas, $datos)
    {
        $this->connect();
        $stmt = $this->conn->prepare("UPDATE citas SET nombre = :nombre, apellido = :apellido, email = :email, telefono = :telefono, fecha_de_cita = :fecha_de_cita, hora_de_cita = :hora_de_cita WHERE id_citas = :id_citas;");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos["apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha_de_cita", $datos["fecha_de_cita"], PDO::PARAM_STR);
        $stmt->bindParam(":hora_de_cita", $datos["hora_de_cita"], PDO::PARAM_STR);
        $stmt->bindParam(':id_citas', $id_citas, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount();
    }

    function validateCita($datos)
    {
        if (empty($datos["nombre"]) || empty($datos["apellido"]) || empty($datos["email"]) || empty($datos["telefono"]) || empty($datos["fecha_de_cita"]) || empty($datos["hora_de_cita"])) {
            return false;
        }
        return true;
    }
}
?>
