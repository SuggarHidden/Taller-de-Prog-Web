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
        <!-- Aquí puedes añadir el historial de precios o cualquier otra sección que necesites -->
      </section>

    <?php endforeach; ?>

    <section id="ethereum">
      <section class="info-section">
        <section class="crypto-title">
          <h2>Ethereum (ETH)</h2>
          <img src="./images/ethereum_logo.png" alt="Ethereum Logo" class="crypto-image">
        </section>
        <section class="crypto-info">
          <p>Ethereum es una plataforma descentralizada que permite la creación de contratos inteligentes
            y aplicaciones descentralizadas (dApps). Su criptomoneda nativa es el Ether (ETH).</p>
        </section>
      </section>
      <section class="crypto-stats">
        <table>
          <tr>
            <th>Market Cap</th>
            <td>$1,382,670,329,905</td>
          </tr>
          <tr>
            <th>Actual Price</th>
            <td>$70,179.73</td>
          </tr>
          <tr>
            <th>Red</th>
            <td>Ethereum</td>
          </tr>
          <tr>
            <th>Creador</th>
            <td>Hitler</td>
          </tr>
        </table>
      </section>
      <section id="price-history-btc">
        <section class="crypto-stats">
          <table>
            <h2>Historial de Precios</h2>
            <tr>
              <th>20/05/24</th>
              <td>$70,179.73</td>
            </tr>
            <tr>
              <th>20/05/24</th>
              <td>$70,179.73</td>
            </tr>
            <tr>
              <th>20/05/24</th>
              <td>$70,179.73</td>
            </tr>
            <tr>
              <th>20/05/24</th>
              <td>$70,179.73</td>
            </tr>
            <tr>
              <th>20/05/24</th>
              <td>$70,179.73</td>
            </tr>
          </table>
        </section>
      </section>
    </section>

    </section>
   
    </section>
    </section>
  </div>
  <script src="main.js"></script>
</body>
<?php include 'footer.php'; ?>

</html>