<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Agregar Nueva Vacante</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <!-- Mostrar mensaje de éxito si existe -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="redirectToVacantes()">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>

                    <!-- Formulario para crear vacante -->
                    <form action="<?= base_url('vacantes/create') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="titulo">Título de la Vacante</label>
                                <input type="text" name="titulo" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="salario">Salario</label>
                                <input type="text" name="salario" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" class="form-control" rows="5" required></textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" name="ubicacion" class="form-control" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="id_categoria">Categoría</label>
                                <select name="id_categoria" class="form-control" required>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nombre'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select name="estado" class="form-control" required>
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Crear Vacante</button>
                        <a href="<?= base_url('vacantes') ?>" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
function redirectToVacantes() {
    window.location.href = "<?= base_url('/Vacantes/VerVacantes') ?>";
}
</script>