<?php
require_once './model/Conexcion.php';

class Producto {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function obtenerTodos() {
        $query = "SELECT *, cantidad * precio_unitario AS total FROM productos";
        $result = $this->conn->query($query);
        $datos = [];

        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }

        return $datos;
    }

    public function guardar($nombre, $cantidad, $precio) {
        $stmt = $this->conn->prepare("INSERT INTO productos (nombre, cantidad, precio_unitario) VALUES (?, ?, ?)");
        $stmt->bind_param("sid", $nombre, $cantidad, $precio);
        return $stmt->execute();
    }
}