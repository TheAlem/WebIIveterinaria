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
$id_mascota = $_POST["id_mascota"] ?? '';
$fecha = $_POST["fecha"] ?? '';
$hora = $_POST["hora"] ?? '';
$motivo = $_POST["motivo"] ?? '';
$notas = $_POST["notas"] ?? '';

if ($action == "create") {
    checkEmptyFields(["id_mascota", "fecha", "hora", "motivo", "notas"]);

    $sql = "INSERT INTO Citas (ID_Mascota, Fecha, Hora, Motivo, Notas) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_mascota, $fecha, $hora, $motivo, $notas]);
    if ($stmt->rowCount() > 0) {
        echo "Cita añadida con éxito.";
    } else {
        echo "Error al añadir cita: " . $stmt->errorInfo()[2];
    }
} else if ($action == "update") {
    $id_cita = $_POST["id_cita"];
    checkEmptyFields(["id_cita", "id_mascota", "fecha", "hora", "motivo", "notas"]);

    $sql = "UPDATE Citas SET ID_Mascota=?, Fecha=?, Hora=?, Motivo=?, Notas=? WHERE ID_Cita=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_mascota, $fecha, $hora, $motivo, $notas, $id_cita]);
    if ($stmt->rowCount() > 0) {
        echo "Cita actualizada con éxito.";
    } else {
        echo "Error al actualizar cita: " . $stmt->errorInfo()[2];
    }
} else if ($action == "delete") {
    $id_cita = $_POST["id_cita"];
    checkEmptyFields(["id_cita"]);

    $sql = "DELETE FROM Citas WHERE ID_Cita=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_cita]);
    if ($stmt->rowCount() > 0) {
        echo "Cita eliminada con éxito.";
    } else {
        echo "Error al eliminar cita: " . $stmt->errorInfo()[2];
    }
}

$stmt = null;
$conn = null;
?>