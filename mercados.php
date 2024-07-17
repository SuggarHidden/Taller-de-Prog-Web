<?php
include 'connect.php';
// Incluir connect.php para asegurar que la sesión esté disponible
if (!isset($_SESSION['user_id'])) {
  // Redirigir a la página de inicio de sesión si no está autenticado
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/mercados.css" />
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
      <?php

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
  <section class="support-header">
    <h2>Mercados</h2>
  </section>

  <div class="crypto-section">
    <?php
    $criptomonedas = obtenerCriptomonedas();

    foreach ($criptomonedas as $cripto):
      $id = htmlspecialchars($cripto['id']);
      $name = htmlspecialchars($cripto['name']);
      $network = htmlspecialchars($cripto['network']);
      $creator = htmlspecialchars($cripto['creator']);
      $market_cap = htmlspecialchars($cripto['market_cap']);
      $description = htmlspecialchars($cripto['description']);
      $enabled = $cripto['enabled'] ? 'Sí' : 'No';
      $created_at = htmlspecialchars($cripto['created_at']);

      $precios = obtenerUltimosPrecios($id);
      ?>

      <section id="bitcoin">
        <section class="info-section">
          <section class="crypto-title">
            <h2><?php echo $name; ?></h2>
            <img src="./images/bitcoin_logo.png" alt="<?php echo $name; ?> Logo" class="crypto-image">
          </section>
          <section class="crypto-info">
            <p><?php echo $description; ?></p>
          </section>
        </section>
        <section class="crypto-stats">
          <table>
            <tr>
              <th>Market Cap</th>
              <td><?php echo $market_cap; ?></td>
            </tr>
            <tr>
              <th>Red</th>
              <td><?php echo $network; ?></td>
            </tr>
            <tr>
              <th>Creador</th>
              <td><?php echo $creator; ?></td>
            </tr>
            <tr>
              <th>Fecha de Creación</th>
              <td><?php echo $created_at; ?></td>
            </tr>
            <tr>
              <th>Habilitado</th>
              <td><?php echo $enabled; ?></td>
            </tr>
          </table>
        </section>
        <section id="price-history-btc">
          <h3>Últimos 5 precios</h3>
          <section class="crypto-stats">


            <table>
              <tr>
                <th>Fecha</th>
                <th>Precio</th>
              </tr>
              <?php
              if (!empty($precios)) {
                foreach ($precios as $precio) {
                  echo '<tr>';
                  echo '<td>' . htmlspecialchars($precio['fecha']) . '</td>';
                  echo '<td>' . htmlspecialchars($precio['precio']) . '</td>';
                  echo '</tr>';
                }
              } else {
                echo '<tr><td colspan="2">No hay precios disponibles.</td></tr>';
              }
              ?>
            </table>
          </section>
        </section>
      </section>

    <?php endforeach; ?>
  </div>
  <?php include 'footer.php'; ?>

  <script src="main.js"></script>
  <script src="https://accounts.google.com/gsi/client" async></script>
  <?php include 'login-register.php'; ?>
</body>

</html>