<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/lista-reclamos.css" />
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
    <section id="reclamos">
        <h2 id="title1">HISTORIAL</h2>
        <p id="title2">DE RECLAMOS</p>
      <table border="1" id="table">
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Teléfono</th>
          <th>Producto o Servicio</th>
          <th>Reclamo</th>
        </tr>
      <?php
        if (file_exists('reclamos.txt')) {
          $reclamos = file('reclamos.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          foreach ($reclamos as $reclamo) {
            $reclamo_data = json_decode($reclamo, true);
            echo "<tr>
                        <td>{$reclamo_data['nombre']}</td>
                        <td>{$reclamo_data['email']}</td>
                        <td>{$reclamo_data['telefono']}</td>
                        <td>{$reclamo_data['producto']}</td>
                        <td>{$reclamo_data['reclamo']}</td>
                      </tr>";
          }
        } else {
          echo "<tr><td colspan='5'>No hay reclamos registrados.</td></tr>";
        }
        ?>
      </table>
    </section>
      </table>
    </section>
   
  </body>
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
            <a href="./entregable4.php">Noticias</a><br />
          </nav>
        </td>
        <td class="footer-column">
          <nav>
          <a href="./privacity.php">Politica de Privacidad</a><br />
          <a href="./terms.php">Terminos del servicio</a><br />
          <a href="./reclamos.php">Libro de reclamaciones</a><br />
          <a href="./lista-reclamos.php">Historial de reclamos</a><br />
          <a href="./entregable4.php">Entregable 4</a><br />
          </nav>
        </td>
      </tr>
    </table>
  </footer>
</html>
