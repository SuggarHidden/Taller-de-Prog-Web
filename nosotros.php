<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/nosotros.css" />
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
        <a href="login.php"><button id="btnLogging">Inicia Sesion</button></a>
        <a href="register.php"><button id="btnRegister">Registrate</button></a>
      </div>
    </header>
    <section>
      <h2>CRIPTOMONEDAS</h2>
      <div id="left-img">
        <img id="crypto" src="images/criptocoin.png" alt="cripto" />
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
        <img src="images/desentralizacion.png" alt="cripto" />
      </div>
      <div id="left-img">
        <img src="images/globalidad.png" alt="cripto" />
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
      <div id="right-img">
        <div>
          <h3>Contratos inteligentes</h3>
          <p>
            Algunas criptomonedas, como Ethereum, permiten la ejecución de
            contratos inteligentes, que son acuerdos autoejecutables con
            términos y condiciones predefinidos.
          </p>
        </div>
        <img src="images/contract.png" alt="cripto" />
      </div>
      <div id="left-img">
        <img src="images/anon.png" alt="cripto" />
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
    <footer id="main-footer">
      <table style="width: 100%">
        <tr class="footer-elements">
          <td class="footer-column">
            <div>
              <h2>PIGEON CRYPTO MARKET</h2>
              <p>
                PIGEON CRYPTO MARKET, el principal mercado, hace que comprar y
                vender bitcoins en efectivo, con tarjeta o mediante
                transferencia bancaria sea facilísimo.
              </p>
              <p>
                Regístrate para recibir las últimas noticias, descuentos y mucho
                más sobre las criptomonedas.
              </p>
              <input type="email" placeholder="correo" id = "footer-email" onkeydown="footer(event)"/>
              <p class="footer-info">
                © 2024 Lorena Kim - Gary Sanchez | Taller Web
              </p>
            </div>
          </td>
          <td class="footer-column">
            <nav>
              <a href="./mercados.php">Mercado</a><br />
              <a href="./nosotros.php">Nosotros</a><br />
              <a href="./soporte.php">Soporte</a><br />
              <a href="./noticias.php">Noticias</a><br />
            </nav>
          </td>
          <td class="footer-column">
            <nav>
              <a href="./privacity.php">Politica de Privacidad</a><br />
              <a href="./terms.php">Terminos del servicio</a><br />
              <a href="./agreement.php">Acuerdo de informacion</a><br />
              <a href="./reclamos.php">Libro de reclamaciones</a><br />
            </nav>
          </td>
        </tr>
      </table>
    </footer>
    <script src="main.js"></script>
  </body>
</html>