<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/index.css" />
    <link rel="stylesheet" type="text/css" href="./styles/login.css" />
    <title>Crypto Pigeon Market</title>
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
        <a href="register.php"><button id="btnRegister">Registrate</button></a>
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
        <h2 id ="modalTitle">Iniciar sesión</h2>
        <div id="optionsLogin">
          <button class="login-btn google" onclick="window.open('https://accounts.google.com/ServiceLogin', '_blank');">Continuar con Google</button>
          <button class="login-btn email" onclick="showLoginForm()">Usar correo electrónico</button>
        </div>
        
        <!-- Formulario de inicio de sesión oculto -->
        <div id="loginForm" style="display:none;">
        <section class="login">
        <form action="" method="post" class="form" onsubmit="login(event)">
          <label for="email">Correo</label>
          <input type="email" name="email" id="email" placeholder="correo@ejemplo.com" required>
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="*******" required>
          <label for="confirm-password">Confirmar Contraseña</label>
          <input type="password" name="confirm-password" id="confirm-password" placeholder="*******" required>
          <button type="submit" id="btnEnviar">Iniciar Sesión</button>
        </form>
      </section>
            <a href="#">¿Olvidaste tu contraseña?</a>
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
    <script src="main.js"></script>
  </body>
</html>
