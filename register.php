<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/register.css" />
    <link rel="stylesheet" type="text/css" href="./styles/index.css"> 
    <title>Crypto Pigeon Market | Registro</title>
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

    <section id="register-wrap">
      <section id="register-section">
        <h2>Regístrate</h2>
        <form action="" method="post" class="form" id="registerForm" onsubmit="register(event)">
          <label for="email">Correo</label>
          <input type="email" name="email" id="email" placeholder="correo@ejemplo.com" required>
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="*******" required>
          <label for="confirm-password">Confirmar Contraseña</label>
          <input type="password" name="confirm-password" id="confirm-password" placeholder="*******" required>
          <button type="submit">Enviar</button>
        </form>
      </section>
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
