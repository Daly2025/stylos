<?php include 'includes/header.php'; ?>

<main class="contact-form">
    <section class="welcome-form">
        <div class="container">
            <div class="animated-tools">
                <div>✂️</div>
                <div>🪮</div>
                <div>✂️</div>
                <div>🪮</div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h1 class="text-center mb-5">Reserva tu Cita</h1>
                    <form class="animated-form" action="procesar_cita.php" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-group icon-float">
                                    <i class="fas fa-user"></i>
                                    <input type="text" class="form-control" placeholder="Nombre completo" name="nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group icon-float">
                                    <i class="fas fa-phone"></i>
                                    <input type="tel" class="form-control" placeholder="Teléfono" name="telefono" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group icon-float">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group icon-float">
                                    <i class="fas fa-calendar-day"></i>
                                    <input type="date" class="form-control" name="fecha" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group icon-float">
                                    <i class="fas fa-clock"></i>
                                    <input type="time" class="form-control" name="hora" required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group icon-float">
                                    <i class="fas fa-scissors"></i>
                                    <select class="form-control" name="servicio" required>
                                        <option value="">Selecciona un servicio</option>
                                        <option value="corte_senora">Corte de Pelo Señora</option>
                                        <option value="corte_caballero">Corte de Pelo Caballero</option>
                                        <option value="corte_ninos">Corte de Pelo Niños</option>
                                        <option value="barba">Corte de Barba</option>
                                        <option value="tinte">Tinte</option>
                                        <option value="mechas">Mechas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary btn-float">
                                    <i class="fas fa-paper-plane me-2"></i>Enviar Reserva
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>