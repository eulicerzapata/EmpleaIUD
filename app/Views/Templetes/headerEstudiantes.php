<!-- app/Views/Templetes/head.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplea IUD</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="<?= base_url('adminlte/css/adminlte.min.css') ?>">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- AdminLTE CSS desde CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- AdminLTE JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>

    <link rel="stylesheet" href="<?= base_url('css/VerVacantes.css') ?>">


</head>



<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('images/Emplea_IUD.png') ?>" alt="Logo" class="brand-image img-circle elevation-3">
                <span class="brand-text font-weight-light">Emplea IUD</span>
                
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
                        
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= session('nombre') ?> - <?= session('tipo_usuario') ?> </a>
                        
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Menu de la empresa -->

                        <li class="nav-item">
                            <a href="/MenuEstudiante" class="nav-link">
                                <i class="nav-icon fas fa-home"></i> <!-- Cambiado a ícono de inicio -->
                                <p>
                                    Inicio
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/Vacantes/VerTodasVacantes" class="nav-link">
                                <i class="nav-icon fas fa-briefcase"></i>
                                <p>
                                     Vacantes
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>
                                    Cerrar Sesión
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>