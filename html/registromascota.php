<?php
session_start();

// Verificar si el usuario tiene rol de administrador
if ($_SESSION['rol'] !== 'Administrador') {
    // Redirigir a una página de acceso denegado o mostrar un mensaje de error
    header('Location: acceso_denegado.html');
    exit();
}
?>
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
    <title>Registro de Mascotas</title>

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
    <link rel="stylesheet" type="text/css" href="../css/stylecrudmascota.css">
</head>
<style>
    /* Estilos para los botones */
/* Estilos para los botones */
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF; /* Color de fondo personalizado (azul) */
    color: #fff; /* Color de texto personalizado */
    border: none;
    border-radius: 5px; /* Radio de borde personalizado */
    transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #0069D9; /* Cambio de color al pasar el cursor (azul más oscuro) */
}

.button.secondary {
  background-color: #F44336; /* Color de fondo personalizado para botón secundario (rojo) */
}

.button.secondary:hover {
  background-color: #D32F2F; /* Cambio de color al pasar el cursor para botón secundario (rojo más oscuro) */
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
                                                <a href="#">
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
                                    <h2>Registro de Mascotas</h2>
                                    <?php
                                    session_start();
                                    $mascotas = $_SESSION['mascotas'] ?? [];
                                    ?>

                                    <h3>Datos del Dueño</h3>
                                    <form action="../php/crud_mascota.php" method="post">
                                        <input type="hidden" name="action" value="get_owner">
                                        <label for="id_cliente_dueno">ID del Cliente:</label><br>
                                        <input type="text" id="id_cliente_dueno" name="id_cliente_dueno">
                                        <input type="submit" class="button"  value="Mostrar Datos del Dueño">
                                    </form>

                                    <h3>Registro de mascota</h3>
                                    <form action="../php/crud_mascota.php" method="post">
                                        <input type="hidden" name="action" value="create">
                                        <label for="id_cliente">ID Cliente:</label><br>
                                        <input type="text" id="id_cliente" name="id_cliente"><br>
                                        <label for="nombre">Nombre:</label><br>
                                        <input type="text" id="nombre" name="nombre"><br>
                                        <label for="especie">Especie:</label><br>
                                        <input type="text" id="especie" name="especie"><br>
                                        <label for="raza">Raza:</label><br>
                                        <input type="text" id="raza" name="raza"><br>
                                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label><br>
                                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br>
                                        <label for="peso">Peso:</label><br>
                                        <input type="text" id="peso" name="peso"><br>
                                        <label for="color">Color:</label><br>
                                        <input type="text" id="color" name="color"><br>
                                        <label for="historial_medico">Historial Médico:</label><br>
                                        <textarea id="historial_medico" name="historial_medico"></textarea><br>
                                        <input type="submit" class="button"  value="Registrar">
                                    </form>

                                    <h3>Lista de Mascotas</h3>
                                    <table border="1">
                                        <thead>
                                            <tr>
                                                <th>ID Mascota</th>
                                                <th>ID Cliente</th>
                                                <th>Nombre</th>
                                                <th>Especie</th>
                                                <th>Raza</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Peso</th>
                                                <th>Color</th>
                                                <th>Historial Médico</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($mascotas as $mascota): ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $mascota["ID_Mascota"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["ID_Cliente"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Nombre"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Especie"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Raza"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Fecha_Nacimiento"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Peso"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Color"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $mascota["Historial_Medico"]; ?>
                                                    </td>
                                                    <td>
                                                        <form action="../php/crud_mascota.php" method="post">
                                                            <input type="hidden" name="action" value="update">
                                                            <input type="hidden" name="id_mascota" value="<?php echo $mascota["ID_Mascota"]; ?>">
                                                            <!-- ... campos de actualización ... -->
                                                            <input type="submit" class="button" value="Actualizar">
                                                        </form>
                                                        <form action="../php/crud_mascota.php" method="post">
                                                            <input type="hidden" name="action" value="delete">
                                                            <input type="hidden" name="id_mascota" value="<?php echo $mascota["ID_Mascota"]; ?>">
                                                            <input type="submit" class="button secondary" value="Eliminar">
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
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
                </div>
            </div>
            <!-- END MAIN CONTENT-->
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
