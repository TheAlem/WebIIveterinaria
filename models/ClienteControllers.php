<?php
require_once 'models/ClienteModel.php';

class ClienteController
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    public function registroCliente()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener datos del formulario de registro de cliente
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $direccion = $_POST['direccion'];
            $ciudad = $_POST['ciudad'];
            $telefono = $_POST['telefono'];
            $correo = $_POST['correo'];

            // Validar los datos (puedes implementar validaciones adicionales aquí)

            // Registrar el cliente
            $result = $this->clienteModel->registrarCliente($nombre, $apellido, $direccion, $ciudad, $telefono, $correo);

            // Redirigir según el resultado
            if ($result) {
                echo "Cliente añadido con éxito.";
            } else {
                echo "Error al añadir cliente.";
            }
        } else {
            // Mostrar el formulario de registro de cliente
            require_once 'views/registroCliente.php';
        }
    }
}