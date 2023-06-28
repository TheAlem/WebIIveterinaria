<?php
require_once 'database/Database.php';

class ClienteModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function registrarCliente($nombre, $apellido, $direccion, $ciudad, $telefono, $correo)
    {
        $conn = $this->db->connect();

        $sql = "INSERT INTO Clientes (Nombre, Apellido, Dirección, Ciudad, Teléfono, Correo_electrónico) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nombre, $apellido, $direccion, $ciudad, $telefono, $correo);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }
}