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
  <?php include 'login-register.php'; ?>
</body>

</html>