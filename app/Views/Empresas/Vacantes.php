<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Bienvenido, <?= session('nombre') ?></h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- Ajustamos el tamaño de la columna para que la tabla no se cubra -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">Gestionar Vacantes</h3>
                            <a href="<?= base_url('vacantes/NuevaVacante') ?>" class="btn btn-success btn-sm">
                                <i class="fas fa-plus"></i> Agregar Nueva Vacante
                            </a>
                        </div>



                        <!-- Card body -->
                        <div class="card-body">


                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Título</th>
                                        <th>Descripción</th>

                                        <th>Categoría</th>
                                        <th>Ubicación</th>
                                        <th>Salario</th>
                                        <th>Estado</th>
                                        <th>Fecha de Publicación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($vacantes as $vacante): ?>
                                        <tr>
                                            <td><?= $vacante['titulo'] ?></td>
                                            <td>
                                                <div class="d-inline-block text-truncate" style="max-width: 200px;" data-bs-toggle="tooltip" title="<?= $vacante['descripcion'] ?>">
                                                    <?= strlen($vacante['descripcion']) > 200 ? substr($vacante['descripcion'], 0, 200) . '...' : $vacante['descripcion'] ?>
                                                </div>
                                            </td>

                                            <td><?= $vacante['categoria'] ?></td>
                                            <td><?= $vacante['ubicacion'] ?></td>
                                            <td><?= $vacante['salario'] ?></td>
                                            <td><?= $vacante['estado'] == 1 ? 'Activo' : 'Inactivo' ?></td>
                                            <td><?= $vacante['fecha_publicacion'] ?></td>
                                            <td>
                                                <a href="/vacantes/edit/<?= $vacante['id'] ?>" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
</script>