<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/lista-reclamos.css" />
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
      <button id="btnLogging" onclick="showLogin()">Inicia Sesion</button></a>
      <button id="btnRegister" onclick="showRegister()">Registrate</button></a>
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
  <?php include 'footer.php'; ?>
  <?php include 'login-register.php'; ?>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <script src="main.js"></script>
</html>
