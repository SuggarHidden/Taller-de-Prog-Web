<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/mercados.css" />
  <link rel="stylesheet" type="text/css" href="./styles/gestor-criptos.css" />
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
    <form class="form-container">
      <h2 id="nomargin">Añadir Nueva Criptomoneda</h2>
      <p id="nomargin2">Completa el formulario para añadir 
        una nueva criptomoneda a la plataforma.</p>
        <div class="form-row">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" placeholder="Bitcoin" type="text">
            </div>
            <div class="form-group">
                <label for="network">Red</label>
                <input id="network" placeholder="Ethereum" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" placeholder="Moneda digital descentralizada"></textarea>
        </div>
        <div class="form-actions">
            <label for="enabled" class="checkbox-label">
                <input id="enabled" type="checkbox">
                Habilitado
            </label>
            <button type="submit">Guardar Criptomoneda</button>
        </div>
    </form>


    <form class="form-container">
      <h2 id="nomargin">Editar Criptomoneda</h2>
      <p id="nomargin2"> Actualiza los detalles de una criptomoneda existente.</p>
        <div class="form-row">
            <div class="form-group">
                <label for="name">Nombre</label>
                <input id="name" placeholder="Bitcoin" type="text">
            </div>
            <div class="form-group">
                <label for="network">Red</label>
                <input id="network" placeholder="Ethereum" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea id="description" placeholder="Moneda digital descentralizada"></textarea>
        </div>
        <div class="form-group">
            <label for="edit-crypto">Criptomoneda a Editar</label>
            <div class="select-container">
            <select id="edit-crypto">
                <option value="" disabled selected>Selecciona una Criptomoneda</option>
                <option value="bitcoin">Bitcoin</option>
                <option value="ethereum">Ethereum</option>
                <option value="litecoin">Litecoin</option>
                <option value="ripple">Ripple</option>
            </select>
    </div>
        </div>
        <div class="form-actions">
            <label for="enabled" class="checkbox-label">
                <input id="enabled" type="checkbox">
                Habilitado
            </label>
            <button type="submit">Actualizar Criptomoneda</button>
        </div>
    </form>


    <form class="form-container">
      <h2 id="nomargin">Establecer Precio de Criptomoneda</h2>
      <p id="nomargin2">Establece el precio para una criptomonedas.</p>
      <div class="form-group">
          <label for="crypto-price">Criptomoneda</label>
          <div class="select-container">
              <select id="crypto-price">
                  <option value="" disabled selected>Selecciona una Criptomoneda</option>
                  <option value="bitcoin">Bitcoin</option>
                  <option value="ethereum">Ethereum</option>
                  <option value="litecoin">Litecoin</option>
                  <option value="ripple">Ripple</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <label for="price">Precio</label>
          <input id="price" type="number" placeholder="Introduce el precio" class="input-field">
      </div>
      <div class="form-group">
          <label for="date">Fecha</label>
          <div class="contenedor">
              <button class="contenedor-button" type="button">
                  <span class="button-icon">📅</span>
                  Seleccionar fecha
              </button>
              <div class="contenedor-content">
                  <input type="date" id="date-picker" class="date-picker">
              </div>
          </div>
      </div>
      <div class="form-action">
            <button type="submit">Establecer precio</button>
        </div>
    </form>


    <form class="form-container">
      <h2 id="nomargin">Eliminar Criptomoneda</h2>
      <p id="nomargin2"> Elimina una criptomoneda de la plataforma.</p>
        <div class="form-group">
            <label for="edit-crypto">Criptomoneda a Eliminar</label>
            <div class="select-container">
            <select id="edit-crypto">
                <option value="" disabled selected>Selecciona una Criptomoneda</option>
                <option value="bitcoin">Bitcoin</option>
                <option value="ethereum">Ethereum</option>
                <option value="litecoin">Litecoin</option>
                <option value="ripple">Ripple</option>
            </select>
    </div>
        </div>
        <div class="form-action">
            <button type="submit" id="rojo">Eliminar Criptomoneda</button>
        </div>
    </form>


    <form class="form-container">
      <h2 id="nomargin">Eliminar Precio de Criptomoneda</h2>
      <p id="nomargin2">Elimina un precio específico de criptomoneda de la plataforma.</p>
      <div class="form-group">
          <label for="crypto-price">Criptomoneda</label>
          <div class="select-container">
              <select id="crypto-price">
                  <option value="" disabled selected>Selecciona una Criptomoneda</option>
                  <option value="bitcoin">Bitcoin</option>
                  <option value="ethereum">Ethereum</option>
                  <option value="litecoin">Litecoin</option>
                  <option value="ripple">Ripple</option>
              </select>
          </div>
      </div>
      <div class="form-group">
          <label for="date">Fecha</label>
          <div class="contenedor">
              <button class="contenedor-button" type="button">
                  <span class="button-icon">📅</span>
                  Seleccionar fecha
              </button>
              <div class="contenedor-content">
                  <input type="date" id="date-picker" class="date-picker">
              </div>
          </div>
      </div>
      <div class="form-action">
            <button type="submit" id="rojo">Borrar precio</button>
        </div>
    </form>

    </section>
  </section>

    
  <script src="main.js"></script>
</body>
<?php include 'footer.php'; ?>

</html>