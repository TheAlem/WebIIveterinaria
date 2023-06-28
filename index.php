<?php
require_once 'controllers/ClienteController.php';
require_once 'controllers/UsuarioController.php';

// Verificar qué acción se solicita
$action = $_GET['action'] ?? 'registroCliente'; // La acción predeterminada es "registroCliente"

// Crear instancias de los controladores
$clienteController = new ClienteController();
$usuarioController = new UsuarioController();

// Enrutamiento basado en la acción solicitada
switch ($action) {
    case 'registroCliente':
        $clienteController->registroCliente();
        break;
    case 'registroUsuario':
        $usuarioController->registroUsuario();
        break;
    case 'login':
        $usuarioController->login();
        break;
    case 'logout':
        $usuarioController->logout();
        break;
    default:
        // Acción inválida, redirigir a la página de inicio
        header('Location: index.php?action=registroCliente');
        break;
}