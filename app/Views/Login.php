<body class="hold-transition login-page bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-box">
            <div class="login-logo">
                <img src="<?= base_url('images/Emplea_IUD.png') ?>" alt="Descripción de la imagen" style="width: 400px; height: 300px; border-radius: 2%;">
            </div>

            <!-- Tarjeta del formulario -->
            <div class="card shadow-lg">
                <div class="card-body login-card-body">
                    <h5 class="text-center mb-3">Inicia sesión</h5>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>


                    <form action="<?= base_url('/login/authenticate') ?>" method="post">
                        <!-- Campo usuario -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Usuario</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Usuario" required>
                            </div>
                        </div>

                        <!-- Campo contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                        </div>

                        <!-- Recordar y botón -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Recordarme</label>
                            </div>
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>

                        <!-- Botón Iniciar Sesión -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y AdminLTE JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('adminlte/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('adminlte/js/adminlte.min.js') ?>"></script>
</body>