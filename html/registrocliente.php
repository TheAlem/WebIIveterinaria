<?php
session_start();

// Verificar si el usuario tiene rol de administrador
if ($_SESSION['rol'] != 'Administrador') {
    // Redirigir a una página de acceso denegado o mostrar un mensaje de error
    header('Location: acceso_denegado.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <link rel="icon" href="../images/icon/comprar.png" type="image/x-icon">

    <!-- Title Page-->
    <title>Registro de Cliente</title>

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

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/stylescrudcliente.css">

    <link rel="stylesheet" href="../css/form.css" media="all">
</head>
<style>
    .input-field {
    padding: 5px;
    margin: 5px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.btn-update {
    background-color: #0000FF; /* Azul */
    color: white;
    padding: 5px 10px;
    margin: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-update:hover {
    background-color: #000099; /* Azul más oscuro para el hover */
}

.btn-delete {
    background-color: #f44336;
    color: white;
    padding: 5px 10px;
    margin: 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-delete:hover {
    background-color: #da190b;
}

</style>
<body>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="index.html">
                    <img  style="height: 100px; width:100px" src="../images/icon/Logo Animales Gatos Cartel Mascotas Kawaii Ilustración Beige Marrón.png" alt="Logo Vet" />
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
                    <a href="citas.php">
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
                    <img  style="height: 100px; width:100px" src="../images/icon/Logo Animales Gatos Cartel Mascotas Kawaii Ilustración Beige Marrón.png" alt="Logo Vet" />
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
                            <a href="citas.html">
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
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                <center><strong>Registro de Cliente</strong></center>
                                    </div>
                                    <div class="card-body card-block">
                                        <form class="formulario-producto" action="../php/crud_cliente.php" method="post">
                                            <input type="hidden" name="action" value="create">
                                            <div class="form-group">
                                                <label for="nombre" class="form-control-label">Nombre:</label>
                                                <input type="text" id="nombre" name="nombre"
                                                    placeholder="Ingrese el nombre" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="direccion" class="form-control-label">Dirección:</label>
                                                <input type="text" id="direccion" name="direccion"
                                                    placeholder="Ingrese la dirección" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono" class="form-control-label">Teléfono:</label>
                                                <input type="text" id="telefono" name="telefono"
                                                    placeholder="Ingrese el teléfono" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-control-label">Email:</label>
                                                <input type="email" id="email" name="email"
                                                    placeholder="Ingrese el email" class="form-control">
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success">Registrar</button>
                                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><br>
                            <h2>Lista de Clientes</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Dirección</th>
                    <th>Ciudad</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
                <?php
                require_once '../php/db_config.php'; // Reemplaza con la ruta a tu archivo de base de datos
                
                // Realizar consulta a la base de datos
                $stmt = $conn->prepare("SELECT * FROM Clientes"); // Asegúrate de que 'Clientes' es el nombre correcto de tu tabla
                $stmt->execute();

                // Fetch all rows as an associative array
                $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td>
                            <?php echo $cliente["ID_Cliente"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Nombre"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Apellido"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Dirección"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Ciudad"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Teléfono"]; ?>
                        </td>
                        <td>
                            <?php echo $cliente["Correo_electrónico"]; ?>
                        </td>
                        <td>
                            <form action="../php/crud_clientes.php" method="post">
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id_cliente" value="<?php echo $cliente["ID_Cliente"]; ?>">
                                <div class="input-group">
                                    <input type="text" name="nombre" value="<?php echo $cliente["Nombre"]; ?>" placeholder="Nombre"
                                        class="input-field">
                                    <input type="text" name="apellido" value="<?php echo $cliente["Apellido"]; ?>" placeholder="Apellido"
                                        class="input-field">
                                    <input type="text" name="direccion" value="<?php echo $cliente["Dirección"]; ?>" placeholder="Dirección"
                                        class="input-field">
                                    <input type="text" name="ciudad" value="<?php echo $cliente["Ciudad"]; ?>" placeholder="Ciudad"
                                        class="input-field">
                                    <input type="text" name="telefono" value="<?php echo $cliente["Teléfono"]; ?>" placeholder="Teléfono"
                                        class="input-field">
                                    <input type="text" name="correo" value="<?php echo $cliente["Correo_electrónico"]; ?>"
                                        placeholder="Correo" class="input-field">
                                </div>
                                <button type="submit" class="btn-update">Actualizar</button>
                            </form>
                            <form action="../php/crud_clientes.php" method="post">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id_cliente" value="<?php echo $cliente["ID_Cliente"]; ?>">
                                <button type="submit" class="btn-delete">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>

                        </div>
                        <!-- Footer -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="copyright">
                                            <p>Copyright © 2023 Colorlib. All rights reserved. Template byGrupo con 4 cambas.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Footer -->
                    </div>
                </div>
            </div>
            
            <!-- END MAIN CONTENT-->

            <!-- Footer -->
            <div class="row">
                <div class="col-md-12">
                    <div class="footer">
                        <p>© 2023 Colorlib. All rights reserved. Template by Grupo con 4 cambas.</p>
                    </div>
                </div>
            </div>
            <!-- End of Footer -->
        </div>
    </div>

    <!-- Bootstrap JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../vendor/slick/slick.min.js"></script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js"></script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js"></script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
</body>

</html>