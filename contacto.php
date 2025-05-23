<?php include 'includes/header.php'; ?>

<main class="contact">
    <section class="contact-info">
        <h2>Contacto y Reservas</h2>
        <div class="address">
            <h3>Nuestra Ubicación</h3>
            <p><i class="fas fa-map-marker-alt"></i> Calle Torrecedeira, 81</p>
            <p>Vigo, Pontevedra</p>
            <p><i class="fas fa-phone"></i> <a href="tel:+34666555444">666 555 444</a></p>
            
            <div class="hours">
                <h3>Horario de Atención</h3>
                <p>Lunes a Viernes:</p>
                <p>Mañanas: 9:00 - 14:00</p>
                <p>Tardes: 17:00 - 20:00</p>
            </div>
        </div>
    </section>

    <section class="appointment-form">
        <h3>Reserva tu Cita</h3>
        <form action="procesar_cita.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
                <label for="servicio">Servicio:</label>
                <select id="servicio" name="servicio" required>
                    <option value="">Selecciona un servicio</option>
                    <option value="corte_senora">Corte de Pelo Señora</option>
                    <option value="corte_caballero">Corte de Pelo Caballero</option>
                    <option value="corte_ninos">Corte de Pelo Niños</option>
                    <option value="barba">Corte de Barba</option>
                    <option value="tinte">Tinte</option>
                    <option value="mechas">Mechas</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="fecha">Fecha deseada:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            
            <div class="form-group">
                <label for="hora">Hora deseada:</label>
                <input type="time" id="hora" name="hora" required>
            </div>
            
            <button type="submit">Solicitar Cita</button>
        </form>
    </section>
</main>

<?php include 'includes/footer.php'; ?>