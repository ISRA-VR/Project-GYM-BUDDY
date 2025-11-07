<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Login</title>
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

            <h2>Bienvenido usuario</h2>
            <p class="subtitle">Entrena mejor, alcanza más.</p>

            <form>
                <div class="input-box">
                    <input type="email" required>
                    <label>Correo electrónico</label>
                </div>

                <div class="input-box">
                    <input type="password" id="password" required>
                    <label>Contraseña</label>
                    <i class="bi bi-eye toggle-password" data-target="password"></i>
                </div>

                <button class="btn"><span>Iniciar Sesión</span></button>

                <p class="switch">¿Olvidaste tu contraseña? <a href="#">Recuperala</a></p>
                <p class="switch">¿No tienes cuenta? <a href="register.php">Regístrate</a></p>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p class="footer-text">&copy; 2025 Fit Partner · Todos los derechos reservados</p>

        <div class="footer-socials">
            <a href="https://github.com/ISRA-VR"><i class="bi bi-github"></i></a>
            <a href="https://www.facebook.com/isra.IVR01/?locale=es_LA"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="mailto:israelvalerdi65@gmail.com"><i class="bi bi-envelope"></i></a>
        </div>
    </footer>


    <script src="../../public/assets/js/script.js"></script>

</body>
</html>