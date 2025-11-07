<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Registro</title>
    <link rel="stylesheet" href="../../public/assets/css/auth.css">
    <link rel="stylesheet" href="../../public/assets/css/escabezadoPie.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <header class="header">
        <div class="header-content">
            <img src="../../public/assets/img/logos/letrasgym.png" alt="Fit Partner" class="header-logo">
        </div>
    </header>

    <div class="bg-animation"></div>
    <div class="auth-container fadeIn">
        <div class="card glass">
            <img src="../../public/assets/img/logos/logogym.png" alt="Fit Partner" class="logo">
            <h2>Crea tu cuenta</h2>
            <p class="subtitle">Encuentra tu mejor versión</p>

            <form>
                <div class="input-grid">
                    <div class="input-box">
                        <input type="text" required>
                        <label>Nombre completo</label>
                    </div>

                    <div class="input-box">
                        <input type="number" required>
                        <label>Edad</label>
                    </div>

                    <div class="input-box">
                        <input type="number" required>
                        <label>Estatura (cm)</label>
                    </div>

                    <div class="input-box">
                        <input type="number" required>
                        <label>Peso (kg)</label>
                    </div>

                    <div class="input-box full">
                        <input type="email" required>
                        <label>Correo electrónico</label>
                    </div>

                    <div class="input-box">
                        <input type="password" id="password" required>
                        <label>Contraseña</label>
                        <i class="bi bi-eye toggle-password" data-target="password"></i>
                    </div>

                    <div class="input-box">
                        <input type="password" id="confirm_password" required>
                        <label>Confirmar contraseña</label>
                        <i class="bi bi-eye toggle-password" data-target="confirm_password"></i>
                    </div>

                </div>
                <div class="terms">
                    <input type="checkbox" required>
                    <span>Acepto los términos y condiciones</span>
                </div>
                <button class="btn">Crear cuenta</button>
                <p class="switch">¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p class="footer-text">&copy; 2025 Fit Partner · Todos los derechos reservados</p>

        <div class="footer-socials">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter-x"></i></a>
        </div>
    </footer>

    <script src="../../public/assets/js/script.js"></script>

</body>
</html>