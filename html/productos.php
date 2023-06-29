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

    <style>
    .formulario-producto {
        width: 80%;
        margin: auto;
        background: #f8f9fa;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
    }

    .formulario-producto label {
        display: block;
        margin: 10px 0px 5px 0px;
        color: #333;
        font-weight: bold;
    }

    .formulario-producto input[type="text"], .formulario-producto input[type="number"] {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    .formulario-producto input[type="submit"] {
        display: block;
        width: 200px;
        margin: 20px auto;
        padding: 10px;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
    }

    .formulario-producto input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body  class="productoc">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <img src="../images/icon/logo.png" alt="CoolAdmin" />
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="info.html">
                            <i class="fas fa-tachometer-alt"></i>Menu principal</a>

                    </li>
                    <li>
                        <a href="productos.php">
                            <i class="fas fa-chart-bar"></i>Producto</a>
                    </li>
                    <li>
                        <a href="servicios.html">
                            <i class="fas fa-table"></i>Servicios</a>
                    </li>
                    <li>
                        <a href="citas.html">
                            <i class="far fa-check-square"></i>Citas</a>
                    </li>
                    <li>
                        <a href="registrocliente.php">
                            <i class="fas fa-calendar-alt"></i>Clientes</a>
                    </li>
                    <li>
                        <a href="registromascota.php">
                            <i class="fas fa-map-marker-alt"></i>Mascotas</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="images/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="info.html">
                            <i class="fas fa-bars"></i>Menu principal</a>
                    </li>
                    <li>
                        <a href="productos.php">
                            <i class="fas fa-shopping-bag"></i>Productos</a>
                    </li>
                    <li>
                        <a href="servicios.html">
                            <i class="fas fa-shopping-cart"></i>Servicios</a>
                    </li>
                    <li>
                        <a href="citas.php">
                            <i class="fas fa-calendar-alt"></i>Citas</a>
                    </li>
                    <li>
                        <a href="registrocliente.php">
                            <i class="fas fa-user"></i>Clientes</a>
                    </li>
                    <li>
                        <a href="registromascota.php">
                            <i class="fas fa-paw"></i>Mascotas</a>
                    </li>
                </ul>
                </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search"
                                placeholder="Search for datas &amp; reports..." />
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">john doe</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">john doe</a>
                                                </h5>
                                                <span class="email">johndoe@example.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="logout.php">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="containerp">
                                <h2>Formulario de Productos</h2>
                                <form class="formulario-producto" action="../php/crud_productos.php" method="post">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
    </div>
</body>

</html>