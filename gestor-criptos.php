<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="./styles/global.css">
  <link rel="stylesheet" type="text/css" href="./styles/mercados.css">
  <link rel="stylesheet" type="text/css" href="./styles/gestor-criptos.css">
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

  <section class="gestor">
    <div id="titulo">
      <h2 id="title1">GESTIONAR</h2>
      <p id="title2">CRIPTOMONEDAS</p>
    </div>

    <section id="opciones">
      <!-- Formulario 1: Añadir Nueva Criptomoneda-->
      <form id="createCrypto" class="form-container" action="connect.php" method="post">
        <h2 id="nomargin">Añadir Nueva Criptomoneda</h2>
        <p id="nomargin2">Completa el formulario para añadir una nueva criptomoneda a la plataforma.</p>
        <div class="form-row">
          <div class="form-group">
            <label for="name">Nombre</label>
            <input id="name" name="name" placeholder="Bitcoin" type="text" required>
          </div>
          <div class="form-group">
            <label for="network">Red</label>
            <input id="network" name="network" placeholder="Ethereum" type="text" required>
          </div>
          <div class="form-group">
            <label for="creator">Creador</label>
            <input id="creator" name="creator" placeholder="Nombre" type="text">
          </div>
          <div class="form-group">
            <label for="market_cap">Market Cap</label>
            <input id="market_cap" name="market_cap" placeholder="$1,382,670,329,905" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="description">Descripción</label>
          <textarea id="description" name="description" placeholder="Moneda digital descentralizada"></textarea>
        </div>
        <div class="form-actions">
          <label for="enabled" class="checkbox-label">
            <input id="enabled" name="enabled" type="checkbox">
            Habilitado
          </label>
          <button type="submit" name="create_crypto">Guardar Criptomoneda</button>
        </div>
      </form>

      <!-- Formulario 2: Editar Criptomoneda -->
      <form id="editCrypto" class="form-container" action="connect.php" method="post">
        <h2 id="nomargin">Editar Criptomoneda</h2>
        <p id="nomargin2">Actualiza los detalles de una criptomoneda existente.</p>
        <div class="form-row">
          <div class="form-group">
            <label for="edit-name">Nombre</label>
            <input id="edit-name" name="edit_name" placeholder="Bitcoin" type="text">
          </div>
          <div class="form-group">
            <label for="edit-network">Red</label>
            <input id="edit-network" name="edit_network" placeholder="Ethereum" type="text">
          </div>
          <div class="form-group">
            <label for="edit-creator">Creador</label>
            <input id="edit-creator" name="edit_creator" placeholder="Nombre" type="text">
          </div>
          <div class="form-group">
            <label for="edit-market_cap">Market Cap</label>
            <input id="edit-market_cap" name="edit_market_cap" placeholder="$1,382,670,329,905" type="text">
          </div>
        </div>
        <div class="form-group">
          <label for="edit-description">Descripción</label>
          <textarea id="edit-description" name="edit_description"
            placeholder="Moneda digital descentralizada"></textarea>
        </div>
        <div class="form-group">
          <label for="edit-crypto">Criptomoneda a Editar</label>
          <div class="select-container">
            <select id="edit-crypto" name="edit_crypto">
              <option value="" disabled selected>Selecciona una Criptomoneda</option>
              <?php
              include_once 'connect.php';
              $criptomonedas = obtenerCriptomonedas();

              foreach ($criptomonedas as $cripto) {
                echo "<option value='" . htmlspecialchars($cripto['id']) . "'>" . htmlspecialchars($cripto['name']) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-actions">
          <label for="edit-enabled" class="checkbox-label">
            <input id="edit-enabled" name="edit_enabled" type="checkbox">
            Habilitado
          </label>
          <button type="submit" name="update_crypto">Actualizar Criptomoneda</button>
        </div>
      </form>

      <!-- Formulario 3: Establecer Precio de Criptomoneda -->
      <form id="setPrice" class="form-container" action="connect.php" method="post">
        <h2 id="nomargin">Establecer Precio de Criptomoneda</h2>
        <p id="nomargin2">Establece el precio para una criptomoneda.</p>
        <div class="form-group">
          <label for="crypto-price">Criptomoneda</label>
          <div class="select-container">
            <select id="crypto-price" name="crypto_price">
              <option value="" disabled selected>Selecciona una Criptomoneda</option>
              <?php
              include_once 'connect.php';
              $criptomonedas = obtenerCriptomonedas();

              foreach ($criptomonedas as $cripto) {
                echo "<option value='" . htmlspecialchars($cripto['id']) . "'>" . htmlspecialchars($cripto['name']) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="price">Precio</label>
          <input id="price" name="price" type="number" step="any" placeholder="Introduce el precio" class="input-field">
        </div>
        <div class="form-group">
          <label for="date">Fecha</label>
          <div class="contenedor">
            <button class="contenedor-button" type="button">
              <span class="button-icon">📅</span>
              Seleccionar fecha
            </button>
            <div class="contenedor-content">
              <input type="date" id="date-picker" name="date_picker" class="date-picker">
            </div>
          </div>
        </div>
        <div class="form-action">
          <button type="submit" name="submit_price">Establecer precio</button>
        </div>
      </form>

      <!-- Formulario 4: Eliminar Criptomoneda -->
      <form id="deleteCrypto" class="form-container" action="connect.php" method="post">
      <form id="deleteCrypto" class="form-container" action="connect.php" method="post">
        <h2 id="nomargin">Eliminar Criptomoneda</h2>
        <p id="nomargin2">Elimina una criptomoneda de la plataforma.</p>
        <div class="form-group">
          <label for="delete-crypto">Criptomoneda a Eliminar</label>
          <div class="select-container">
            <select id="delete-crypto" name="delete_crypto">
              <option value="" disabled selected>Selecciona una Criptomoneda</option>
              <?php
              include_once 'connect.php';
              $criptomonedas = obtenerCriptomonedas();

              foreach ($criptomonedas as $cripto) {
                echo "<option value='" . htmlspecialchars($cripto['id']) . "'>" . htmlspecialchars($cripto['name']) . "</option>";
              }
              ?>
              <?php
              include_once 'connect.php';
              $criptomonedas = obtenerCriptomonedas();

              foreach ($criptomonedas as $cripto) {
                echo "<option value='" . htmlspecialchars($cripto['id']) . "'>" . htmlspecialchars($cripto['name']) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-action">
          <button type="submit" id="rojo">Eliminar Criptomoneda</button>
        </div>
      </form>

      <form id="deletePrice" class="form-container" action="connect.php" method="post">
        <h2 id="nomargin">Eliminar Precio de Criptomoneda</h2>
        <p id="nomargin2">Elimina un precio específico de criptomoneda de la plataforma.</p>
        <div class="form-group">
          <label for="delete-price-crypto">Criptomoneda</label>
          <div class="select-container">
            <select id="delete-price-crypto" name="delete_price_crypto" onchange="loadPrices(this.value)">
              <option value="" disabled selected>Selecciona una Criptomoneda</option>
              <?php
              include_once 'connect.php';
              $criptomonedas = obtenerCriptomonedas();

              foreach ($criptomonedas as $cripto) {
                echo "<option value='" . htmlspecialchars($cripto['id']) . "'>" . htmlspecialchars($cripto['name']) . "</option>";
              }
              ?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="delete-crypto-price">Precio</label>
          <div class="select-container">
            <select id="delete-crypto-price" name="delete_crypto_price">
              <option value="" disabled selected>Selecciona un Precio</option>
            </select>
          </div>
        </div>
        <div class="form-action">
          <button type="submit" id="rojo" name="delete_crypto_price">Eliminar Precio</button>
        </div>
      </form>

      <script>
        function loadPrices(idCripto) {
          if (idCripto === "") {
            return;
          }

          const xhr = new XMLHttpRequest();
          xhr.open("GET", "get_prices.php?id=" + idCripto, true);
          xhr.onload = function () {
            if (this.status === 200) {
              const prices = JSON.parse(this.responseText);
              const select = document.getElementById("delete-crypto-price");
              select.innerHTML = '<option value="" disabled selected>Selecciona un Precio</option>';

              prices.forEach(price => {
                const option = document.createElement("option");
                option.value = price.id;
                option.textContent = `${price.fecha}: $${price.precio}`;
                select.appendChild(option);
              });
            }
          };
          xhr.send();
        }
      </script>


    </section>
  </section>

  <script src="main.js"></script>
  <?php include 'footer.php'; ?>
</body>
</html>
