

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <!-- Botón de Atrás -->
                <a href="<?= base_url('/Vacantes/VerVacantes') ?>" class="btn btn-warning">
                    <i class="fas fa-arrow-left"></i> Atrás
                </a>
                <!-- Título -->
                <h1 class="ml-3">Editar Vacante</h1>
            </div>
        </div>
    </section>

    <section class="content">
    <div class="container-fluid">
        <!-- Mostrar mensaje de éxito si existe -->
        <?php if (isset($success)): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $success ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>




    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url('vacantes/update/' . $vacante['id']) ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="row">
                            <!-- Título de la Vacante -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="titulo">Título de la Vacante</label>
                                    <input type="text" name="titulo" class="form-control" value="<?= $vacante['titulo'] ?>" required>
                                </div>
                            </div>

                            <!-- Salario -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="salario">Salario</label>
                                    <input type="text" name="salario" class="form-control" value="<?= $vacante['salario'] ?>" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Descripción -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Descripción</label>
                                    <textarea name="descripcion" class="form-control" rows="5" required><?= $vacante['descripcion'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Ubicación -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ubicacion">Ubicación</label>
                                    <input type="text" name="ubicacion" class="form-control" value="<?= $vacante['ubicacion'] ?>" required>
                                </div>
                            </div>

                            <!-- Categoría -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="id_categoria">Categoría</label>
                                    <select name="id_categoria" class="form-control" required>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?= $categoria['id'] ?>" <?= $vacante['id_categoria'] == $categoria['id'] ? 'selected' : '' ?>>
                                                <?= $categoria['nombre'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Estado -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="estado">Estado</label>
                                    <select name="estado" class="form-control" required>
                                        <option value="1" <?= $vacante['estado'] == 1 ? 'selected' : '' ?>>Activo</option>
                                        <option value="0" <?= $vacante['estado'] == 0 ? 'selected' : '' ?>>Inactivo</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Botones -->
                            <div class="col-md-6 d-flex align-items-end">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                    <a href="<?= base_url('/Vacantes/VerVacantes') ?>" class="btn btn-secondary">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
</div>



<!-- Script para ocultar la alerta después de 30 segundos -->
<script>
    // Esperar 30 segundos antes de ocultar la alerta automáticamente
    setTimeout(function() {
        $('.alert').alert('close');
    }, 30000); // 30,000 milisegundos = 30 segundos
</script>