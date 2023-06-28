<?php
require_once 'database/Database.php';

class UsuarioModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function registrarUsuario($nombreUsuario, $contraseña, $correo, $rol)
    {
        $conn = $this->db->connect();

        // Hash de la contraseña
        $contraseñaHash = password_hash($contraseña, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Usuarios (Nombre_Usuario, Contraseña, Correo_electrónico, Rol) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nombreUsuario, $contraseñaHash, $correo, $rol);

        $result = $stmt->execute();

        $stmt->close();
        $conn->close();

        return $result;
    }

    public function login($nombreUsuario, $contraseña)
    {
        $conn = $this->db->connect();

        $sql = "SELECT Contraseña FROM Usuarios WHERE Nombre_Usuario=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $nombreUsuario);
        $stmt->execute();
        $stmt->bind_result($contraseñaHash);

        // Verificar si se obtuvo un resultado
        if ($stmt->fetch()) {
            // Verificar la contraseña
            if ($contraseñaHash !== null && password_verify($contraseña, $contraseñaHash)) {
                // Successful login
                // You can implement the logic here to store the user's session
                $stmt->close();
                $conn->close();
                return true;
            }
        }

        $stmt->close();
        $conn->close();

        return false;
    }

    public function logout()
    {
        // You can implement the logic here to unset the user's session
    }
}