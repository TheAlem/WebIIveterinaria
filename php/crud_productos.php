<?php
require_once "db_config.php";

function checkEmptyFields($fields)
{
    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            echo "Por favor, complete todos los campos.";
            exit();
        }
    }
}

$action = $_POST["action"] ?? '';
$nombre = $_POST["nombre"] ?? '';
$descripcion = $_POST["descripcion"] ?? '';
$cantidad_stock = $_POST["cantidad_stock"] ?? '';
$proveedor = $_POST["proveedor"] ?? '';
$precio_unitario = $_POST["precio_unitario"] ?? '';

if ($action == "create") {
    checkEmptyFields(["nombre", "descripcion", "cantidad_stock", "proveedor", "precio_unitario"]);

    $sql = "INSERT INTO Inventario (Nombre, Descripción, Cantidad_Stock, Proveedor, Precio_Unitario) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nombre, $descripcion, $cantidad_stock, $proveedor, $precio_unitario]);
    if ($stmt->rowCount() > 0) {
        echo "Producto añadido con éxito.";
    } else {
        echo "Error al añadir producto: " . $stmt->errorInfo()[2];
    }
}

// Implemente aquí los otros casos para las operaciones de actualizar y eliminar si es necesario.

$stmt = null;
$conn = null;

// Crear una lista de productos.
try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM Inventario";
    $stmt = $conn->query($sql);
    $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Guardar la lista de productos en una variable de sesión para su uso en productos.html.
    session_start();
    $_SESSION['productos'] = $productos;
} catch (PDOException $e) {
    echo "Error al recuperar la lista de productos: " . $e->getMessage();
}

?>