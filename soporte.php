<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/soporte.css">
  <link rel="stylesheet" type="text/css" href="./styles/login.css" />
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
  <title>Crypto Pigeon Market</title>
</head>

<body>
  <header>
    <a href="index.php">
      <h1>CRYPTO PIGEON MARKET</h1>
      <img src="./images/logo.png" alt="Crypto Pigeon Market Logo" class="logo-image">
      <img src="./images/interface.png" alt="Crypto Pigeon Market Options" class="interface">
    </a>
    <div id="options">
      <a href="index.php">Inicio</a>
      <a href="mercados.php">Mercados</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="soporte.php">Soporte</a>
    </div>
    <div id="userOptions">
      <?php
      include 'connect.php';

      if (isset($_SESSION['user_id'])) {
        $username = $_SESSION['username'];
        echo "¡Hola, $username!";
        echo '<a href="logout.php">Cerrar sesión</a>';
      } else {
        echo '<button id="btnLogging" onclick="showLogin()">Iniciar Sesión</button>';
        echo '<button id="btnRegister" onclick="showRegister()">Registrarse</button>';
      }
      ?>
    </div>
  </header>

  <section class="support-header">
    <h2>Centro de Soporte</h2>
    <div class="search-bar">
      <input type="text" placeholder="Buscar artículos de ayuda..." />
      <button>Buscar</button>
    </div>
  </section>
  <section class="self-service">
    <h3>Autoservicio</h3>
    <div class="service-options">
      <div class="option">
        <img src="images/verify_account.png" alt="Verificar Cuenta" />
        <div class="description">Verifica tu cuenta</div>
        <h4>Verificar Cuenta</h4>
      </div>
      <div class="option">
        <img src="images/reset_password.png" alt="Restablecer Contraseña" />
        <div class="description">Restablece tu contraseña</div>
        <h4>Restablecer Contraseña</h4>
      </div>
      <div class="option">
        <img src="images/unlock_account.png" alt="Desbloquear Cuenta" />
        <div class="description">cuentas bloqueadas</div>
        <h4>Desbloquear Cuenta</h4>
      </div>
      <div class="option">
        <img src="images/reset_phone.png" alt="Restablecer Teléfono" />
        <div class="description">por robo/perdida/cambio</div>
        <h4>Restablecer Teléfono</h4>
      </div>
      <div class="option">
        <img src="images/change_email.png" alt="Cambiar Correo Electrónico" />
        <div class="description">Cambio de correo</div>
        <h4>Cambiar Correo Electrónico</h4>
      </div>
    </div>
  </section>
  <section class="faq">
    <h3>Preguntas Frecuentes (FAQ)</h3>
    <div class="faq-options">
      <div class="faq-item">
        <h4>¿Cómo puedo verificar mi cuenta?</h4>
        <p>Para verificar tu cuenta, ve a la sección de verificación y sigue las instrucciones proporcionadas.
          Necesitarás subir documentos de identificación válidos.</p>
      </div>
      <div class="faq-item">
        <h4>¿Cómo puedo restablecer mi contraseña?</h4>
        <p>Haz clic en "Restablecer Contraseña" en la página de inicio de sesión y sigue las instrucciones para recibir
          un enlace de restablecimiento en tu correo electrónico registrado.</p>
      </div>
      <div class="faq-item">
        <h4>¿Qué debo hacer si mi cuenta está bloqueada?</h4>
        <p>Si tu cuenta está bloqueada, ve a la sección de desbloqueo de cuenta y sigue las instrucciones para verificar
          tu identidad y recuperar el acceso.</p>
      </div>
      <div class="faq-item">
        <h4>¿Cómo puedo cambiar mi número de teléfono registrado?</h4>
        <p>Para cambiar tu número de teléfono registrado, ve a la sección de restablecimiento de teléfono y sigue las
          instrucciones para actualizar tu información de contacto.</p>
      </div>
      <div class="faq-item">
        <h4>¿Cómo puedo cambiar mi dirección de correo electrónico?</h4>
        <p>Para cambiar tu dirección de correo electrónico, ve a la sección de cambio de correo electrónico y sigue las
          instrucciones para actualizar tu dirección de correo electrónico registrada.</p>
      </div>
    </div>

  </section>
  <section class="contact">
    <h2>Contáctanos</h2>
    <form action="https://formsubmit.co/lichkingnetwork@gmail.com" method="POST">
      <div class="contact-form">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" placeholder="Tu nombre" required class="contact-atribute">
      </div>
      <div class="contact-form">
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" placeholder="Tu correo" required class="contact-atribute">
      </div class="contact-form">
      <div class="contact-form">
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí" required
          class="contact-atribute"></textarea>
      </div>
      <div class="contact-form">
        <button type="submit" id="enviarBtn">Enviar</button>
      </div>
    </form>
  </section>


  <?php include 'footer.php'; ?>
  <script src="main.js"></script>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <?php include 'login-register.php'; ?>
</body>

</html>