<!DOCTYPE html>
<html>

<head>
    <title>Productos</title>
</head>

<body>
    <h2>Formulario de Productos</h2>
        <form action="../php/crud_productos.php" method="post">
        <input type="hidden" name="action" value="create">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="descripcion">Descripción:</label><br>
        <input type="text" id="descripcion" name="descripcion"><br>
        <label for="cantidad_stock">Cantidad en Stock:</label><br>
        <input type="number" id="cantidad_stock" name="cantidad_stock"><br>
        <label for="proveedor">Proveedor:</label><br>
        <input type="text" id="proveedor" name="proveedor"><br>
        <label for="precio_unitario">Precio Unitario:</label><br>
        <input type="number" id="precio_unitario" name="precio_unitario" step=".01"><br>
        <input type="submit" value="Crear Producto">
    </form>

    <h2>Tabla de Productos</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad en Stock</th>
                <th>Proveedor</th>
                <th>Precio Unitario</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Asegúrate de que tienes tu archivo db_config.php incluido aquí
            // y luego incluye el código para recuperar tus productos
            require_once "db_config.php";

            try {
                $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $sql = "SELECT * FROM Inventario";
                $stmt = $conn->query($sql);
                $productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($productos as $producto) {
                    echo "<tr>";
                    echo "<td>" . $producto['ID_Producto'] . "</td>";
                    echo "<td>" . $producto['Nombre'] . "</td>";
                    echo "<td>" . $producto['Descripción'] . "</td>";
                    echo "<td>" . $producto['Cantidad_Stock'] . "</td>";
                    echo "<td>" . $producto['Proveedor'] . "</td>";
                    echo "<td>" . $producto['Precio_Unitario'] . "</td>";
                    echo "</tr>";
                }

                $stmt = null;
                $conn = null;
            } catch (PDOException $e) {
                echo "Error al recuperar la lista de productos: " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
</body>

</html>