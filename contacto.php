<?php include 'includes/header.php'; ?>

<main class="tool-form">
    <div class="floating-tools">
        <i class="fas fa-cut"></i>
        <i class="fas fa-comb"></i>
        <i class="fas fa-spray-can"></i>
    </div>
    
    <div class="contact-box">
        <h2 class="form-title">¡Reserva tu cita!</h2>
        
        <form class="modern-form">
            <div class="form-group">
                <i class="fas fa-user icon-animate"></i>
                <input type="text" placeholder="Nombre completo" required>
            </div>
            
            <div class="form-group">
                <i class="fas fa-envelope icon-animate"></i>
                <input type="email" placeholder="Correo electrónico" required>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <i class="fas fa-calendar-alt icon-animate"></i>
                    <input type="date" required>
                </div>
                
                <div class="form-group">
                    <i class="fas fa-clock icon-animate"></i>
                    <input type="time" required>
                </div>
            </div>
            
            <button type="submit" class="submit-btn">
                <i class="fas fa-scissors spinning-icon"></i> Reservar ahora
            </button>
        </form>
    </div>
</main>

<?php include 'includes/footer.php'; ?>