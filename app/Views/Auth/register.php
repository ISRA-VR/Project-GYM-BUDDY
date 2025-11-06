<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Partner - Registro</title>
    <link rel="stylesheet" href="../../public/assets/css/auth.css">
</head>
<body>

<div class="bg-animation"></div>

<div class="auth-container fadeIn">
    <div class="card glass">
        <img src="../../public/assets/img/logos/logogym.png" alt="Fit Partner" class="logo">

        <h2>Crea tu cuenta</h2>
        <p class="subtitle">Encuentra tu mejor versión 💪</p>

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
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>

                <div class="input-box">
                    <input type="password" required>
                    <label>Confirmar</label>
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

</body>
</html>
