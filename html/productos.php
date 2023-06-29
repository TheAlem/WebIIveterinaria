<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="icon" href="../images/icon/comprar.png" type="image/x-icon">

    <!-- Title Page-->
    <title>Productos</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>
<body  class="productoc">
    <div class="containerp">
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
</div>
</body>

</html>