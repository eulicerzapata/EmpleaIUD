<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <h1>Vacantes Disponibles</h1>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <?php foreach ($vacantes as $vacante): ?>
                        <div class="card mb-3">
                            <!-- Borde superior con color suave -->
                            <div class="card-header " >
                                <h5 class="card-title"><?= $vacante['titulo'] ?></h5>
                            </div>
                            <div class="card-body">
                                <!-- Descripción completa -->
                                <p class="card-text">
                                    <?= $vacante['descripcion'] ?>
                                </p>

                                <!-- Características sin efecto de botón -->
                                <div class="d-flex flex-wrap">
                                    <span class="custom-badge"><strong>Salario:</strong> <?= $vacante['salario'] ?></span>
                                    <span class="custom-badge"><strong>Ubicación:</strong> <?= $vacante['ubicacion'] ?></span>
                                    <span class="custom-badge"><strong>Categoría:</strong> <?= $vacante['categoria'] ?></span>
                                    <span class="custom-badge"><strong>Empresa:</strong> <?= $vacante['empresa']  ?></span>
                                    <span class="custom-badge"><strong>Fecha de Publicación:</strong> <?= $vacante['fecha_publicacion'] ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- CSS personalizado para las características -->

