<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/mercados.css" />
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
  <section class="support-header">
    <h2>Mercados</h2>
  </section>

  <div class="crypto-section">
    <?php
    include 'connect.php';
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
  <script src="main.js"></script>
</body>
<?php include 'footer.php'; ?>

</html>