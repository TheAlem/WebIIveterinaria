<?php
class RegistroModel
{
  private $conn;

  function __construct($conn)
  {
    $this->conn = $conn;
  }

  function registrarUsuario()
  {
    $nombre_usuario = $_POST["nombre_usuario"];
    $contraseña = $_POST["contraseña"];
    $correo = $_POST["correo"];
    $rol = $_POST["rol"];

    if (empty($nombre_usuario) || empty($contraseña) || empty($correo)) {
      echo "Por favor, complete todos los campos.";
      exit();
    }

    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Usuarios (Nombre_Usuario, Contraseña, Correo_electrónico, Rol) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre_usuario, $contraseña_hash, $correo, $rol);

    if ($stmt->execute()) {
      // Registro exitoso
      header("Location: ../controllers/login.php"); // redirige a la página de inicio de sesión después del registro exitoso
      exit();

    } else {
      echo "Error al registrar usuario: " . $this->conn->error;
    }

    $stmt->close();
  }
}

?>