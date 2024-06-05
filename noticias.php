<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/noticias.css" />
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
        <a href="login.php"><button id="btnLogging">Inicia Sesion</button></a>
        <a href="register.php"><button id="btnRegister">Registrate</button></a>
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
              <input
                type="email"
                placeholder="correo"
                id="footer-email"
                onkeydown="footer(event)"
              />
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