<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/nosotros.css" />
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="./styles/login.css" />
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
      <button id="btnLogging" onclick="showLogin()">Inicia Sesion</button></a>
      <button id="btnRegister" onclick="showRegister()">Registrate</button></a>
      </div>
    </header>
    <section>
      <h2>CRIPTOMONEDAS</h2>
      <div id="left-img">
        <img id="crypto" src="images/criptocoin.png" alt="cripto" class="img"/>
        <p>
          Las criptomonedas son formas digitales de dinero que utilizan
          criptografía para garantizar transacciones seguras y para controlar la
          creación de nuevas unidades. A diferencia de las monedas tradicionales
          emitidas por un gobierno central, las criptomonedas operan de manera
          descentralizada a través de tecnologías de contabilidad distribuida,
          como la cadena de bloques.
        </p>
      </div>
      <div id="right-img">
        <div>
          <h3>Descentralización</h3>
          <p>
            No están controladas por una autoridad central, lo que significa que
            no están sujetas a regulaciones gubernamentales tradicionales.
          </p>
        </div>
        <img src="images/desentralizacion.png" alt="cripto" class="img"/>
      </div>
      <div id="left-img">
        <img src="images/globalidad.png" alt="cripto" class="img" />
        <div>
          <h3>Globalidad</h3>
          <p>
            Las criptomonedas pueden ser transferidas instantáneamente a
            cualquier parte del mundo sin la necesidad de intermediarios
            bancarios, lo que las hace ideales para transacciones
            internacionales.
          </p>
        </div>
      </div>
      <div id="right-img" class="img">
        <div>
          <h3>Contratos inteligentes</h3>
          <p>
            Algunas criptomonedas, como Ethereum, permiten la ejecución de
            contratos inteligentes, que son acuerdos autoejecutables con
            términos y condiciones predefinidos.
          </p>
        </div>
        <img src="images/contract.png" alt="cripto"  class="img"/>
      </div>
      <div id="left-img">
        <img src="images/anon.png" alt="cripto" class="img" />
        <div>
          <h3>Anonimato</h3>
          <p>
            Las criptomonedas ofrecen anonimato y privacidad mediante el uso de
            direcciones digitales pseudónimas que ocultan la identidad de los
            usuarios en las transacciones, además de tecnologías avanzadas como
            la mezcla de monedas y redes de privacidad como Tor, que dificultan
            el rastreo de las transacciones. Algunas criptomonedas, como Monero
            y Zcash, están diseñadas específicamente para ofrecer transacciones
            más privadas mediante el cifrado y la ocultación de detalles como la
            cantidad transferida.
          </p>
        </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>
    <script src="main.js"></script>
    <script src="https://accounts.google.com/gsi/client" async></script>
    <?php include 'login-register.php'; ?>
  </body>
</html>
