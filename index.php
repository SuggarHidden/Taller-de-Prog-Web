<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="referrer" content="origin" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/index.css" />
  <link rel="stylesheet" type="text/css" href="./styles/login.css" />
  <title>Crypto Pigeon Market</title>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
</head>

<body>

  <img id="elipses" src="./images/elipses.svg" alt="elipses" />
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
      <button id="btnLogging" onclick="showLogin()">Inicia Sesion</button></a>
      <button id="btnRegister" onclick="showRegister()">Registrate</button></a>
    </div>
  </header>
  <div class="imagenes">
    <img id="bitcoin" src="./images/bitcoin.png" alt="bitcoin" />
    <img id="litecoin" src="./images/litecoin.png" alt="litecoin" />
    <img id="solana" src="./images/solana.png" alt="solana" />
    <img id="etherium" src="./images/etherium.png" alt="etherium" />
    <img id="doge" src="./images/dogecoin.png" alt="doge" />
    <img id="star1" src="./images/star2.png" alt="star1" />
    <img id="star2" src="./images/star1.png" alt="star2" />
    <img id="star3" src="./images/star1.png" alt="star3" />
    <img id="star4" src="./images/star1.png" alt="star4" />
    <img id="star5" src="./images/star1.png" alt="star5" />
    <img id="star6" src="./images/star2.png" alt="star6" />
  </div>
  <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeLogin()">&times;</span>
      <div id="optionsLogin">
        <h2 id="modalTitle">Iniciar sesión</h2>
        <div class="button-wrapper">
          <div id="g_id_onload"
            data-client_id="794519880683-1r3hbq5j4tc0ipir7b11fppp0stta5ff.apps.googleusercontent.com"
            data-context="signin" data-ux_mode="popup" data-callback="googleResponse" data-auto_prompt="false">
          </div>

          <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
            data-text="signin_with" data-size="large" data-locale="es" data-logo_alignment="left" data-width="400px">
          </div>
        </div>
        <div class="button-wrapper">
          <button class="login-btn email" onclick="showLoginForm()">
            <img src="./images/user-icon.svg" alt="User Icon" class="button-icon">
            Usar correo electrónico</button>
        </div>
      </div>

      <!-- Formulario de inicio de sesión oculto -->
      <div id="loginForm" style="display:none;">
        <h2 id="modalTitle">Iniciar sesión</h2>
        <section class="login">
          <form action="" method="post" class="form" onsubmit="login(event)">
            <label id="emailLabel" for="email">Correo</label>
            <input type="email" name="email" id="email" placeholder="Correo" required>
            <input type="password" name="password" id="password" placeholder="Contraseña" required>
            <div class="cf-turnstile" data-sitekey="1x00000000000000000000AA"></div>
            <button type="submit" id="btnEnviar">Iniciar Sesión</button>
          </form>
        </section>
      </div>
      <!-- Formulario de registro oculto -->
      <div id="registerForm" style="display:none;">
        <h2 id="modalTitle">Regístrate</h2>
        <section class="login">
          <form action="" method="post" class="form" onsubmit="register(event)">
            <label id="emailLabel" for="register-email">Correo</label>
            <input type="email" name="email" id="register-email" placeholder="Correo" required>
            <input type="password" name="password" id="register-password" placeholder="Contraseña" required>
            <input type="password" name="confirm-password" id="register-confirm-password"
              placeholder="Confirmar contraseña" required>
            <div class="cf-turnstile" data-sitekey="1x00000000000000000000AA"></div>
            <button type="submit" id="register-btnEnviar">Registrarse</button>
          </form>
        </section>
      </div>
    </div>
  </div>
  </div>
  <div class="container">
    <h2>LAS CRIPTOMONEDAS<br />MAS CLARAS Y SIMPLES</h2>
    <p>
      ¡Consulta, analiza y toma las decisiones correcta con Crypto Pigeon, la
      plataforma más fiable del mercado!
    </p>
    <a href="nosotros.php">
      <button id="btnInfo">Conoce más</button>
    </a>
  </div>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <script src="main.js"></script>
</body>

</html>