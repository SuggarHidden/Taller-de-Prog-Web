<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css"> 
    <link rel="stylesheet" type="text/css" href="./styles/login.css"> 
    <link rel="stylesheet" type="text/css" href="./styles/index.css"> 
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
    <section class="login-wrap">
      <section class="login">
        <h2>Iniciar Sesion</h2>
        <form action="" method="post" class="form" onsubmit="login(event)">
          <label for="email">Correo</label>
          <input type="email" name="email" id="email" placeholder="correo@ejemplo.com" required>
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="*******" required>
          <label for="confirm-password">Confirmar Contraseña</label>
          <input type="password" name="confirm-password" id="confirm-password" placeholder="*******" required>
          <button type="submit" id="btnEnviar">Enviar</button>
        </form>
      </section>
    </section>
    
    <?php include 'footer.php'; ?>
    <script src="main.js"></script>
  </body>
</html>