<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/noticias.css" />
  <link rel="stylesheet" type="text/css" href="./styles/login.css" />
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <title>Crypto Pigeon Market</title>
  </head>
  <body>
    <header>
      <a href="index.php">
        <h1>CRYPTO PIGEON MARKET</h1>
        <img
          src="./images/logo.png"
          alt="Crypto Pigeon Market Logo"
          class="logo-image"
        />
        <img
          src="./images/interface.png"
          alt="Crypto Pigeon Market Options"
          class="interface"
        />
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
    <section class="support-header">
      <h2>Entregable 3</h2>
    </section>

    <section>
      <h1>Construir Triángulo</h1>
      <form id="triangleForm" onsubmit="triangulo(event)">
        <label for="character">Ingrese un carácter:</label>
        <input
          type="text"
          id="character"
          name="character"
          maxlength="1"
          required
        />
        <br />
        <label for="size">Ingrese el tamaño (N):</label>
        <input type="number" id="size" name="size" min="1" required />
        <br />
        <button type="submit">Construir</button>
      </form>
      <pre id="triangle"></pre>
    </section>

    <section>
      <h1>Determinar Signo Zodiacal</h1>
      <form id="zodiacForm" onsubmit="signo(event)">
        <label for="birthdate">Ingrese su fecha de nacimiento:</label>
        <input type="date" id="birthdate" name="birthdate" required />
        <br /><br />
        <button type="submit">Mostrar Signo</button>
      </form>
      <div id="zodiac-result">
        <img id="zodiac-image" src="" alt="" style="display: none" />
        <div id="zodiac-description"></div>
      </div>
    </section>

    <?php include 'footer.php'; ?>
    <script src="main.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <?php include 'login-register.php'; ?>
  </body>
</html>
