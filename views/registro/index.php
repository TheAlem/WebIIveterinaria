<!DOCTYPE html>
<html>

<head>
    <title>Registro de Usuario</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/styleloginregistro.css">
</head>

<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form action="../libs/registromodel" method="post">
            <label for="nombre_usuario">Nombre de Usuario:</label><br>
            <input type="text" id="nombre_usuario" name="nombre_usuario" required><br>
            <label for="correo">Correo Electrónico:</label><br>
            <input type="email" id="correo" name="correo" required><br>
            <label for="contraseña">Contraseña:</label><br>
            <input type="password" id="contraseña" name="contraseña" required><br>
            <label for="rol">Rol:</label><br>
            <select id="rol" name="rol">
                <option value="0">Usuario</option>
                <option value="1">Administrador</option>
            </select><br>
            <input type="submit" value="Registrar">
            <p>¿Ya tienes una cuenta? <a href="login">Inicia sesión aquí</a>.</p>
        </form> 
    </div>
</body>

</html>