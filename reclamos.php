<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="./styles/global.css" />
    <link rel="stylesheet" type="text/css" href="./styles/reclamos.css" />
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
        <h2 id="title1">LIBRO DE</h2>
        <p id="title2">RECLAMACIONES</p>
      <form method="post">
        <p>
        Lamentamos mucho que hayas tenido una mala experiencia con nosotros. 
        Siempre buscamos mejorar y para esto, escucharte es lo más importante para nosotros. 
        </p>
        <p>
        Según lo establecido en el Código de Protección y Defensa del Consumidor, 
        esta empresa tiene un libro de reclamaciones disponible para ti.
        </p>
        <h2>1. Datos personales</h2>
        <label for="nombre">Nombre<span> *</span></label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email<span> *</span></label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefono">Teléfono<span> *</span></label>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="producto">Producto o Servicio<span> *</span></label>
        <input type="text" id="producto" name="producto" required><br><br>

        <h2>2. Cuéntanos qué sucedió</h2>
        <label for="reclamo">Reclamo<span> *</span></label><br>
        <textarea id="reclamo" name="reclamo" rows="4" cols="50" required></textarea><br><br>
        <hr>
        <p>(<span>*</span>) Campos obligatorios</p>
        <p>Formular una reclamación no impide que la persona 
            recurra a otros mecanismos de resolución de disputas o que esto sea un requisito previo.</p>
        <input type="submit" value="ENVIAR" id="bottonEnviar">
      </form>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $telefono = htmlspecialchars($_POST['telefono']);
        $producto = htmlspecialchars($_POST['producto']);
        $reclamo = htmlspecialchars($_POST['reclamo']);

        $reclamo_data = [
          'nombre' => $nombre,
          'email' => $email,
          'telefono' => $telefono,
          'producto' => $producto,
          'reclamo' => $reclamo
        ];

        // array a json
        $reclamo_json = json_encode($reclamo_data) . PHP_EOL;

        // Crea un archivo si no existe y escribe el reclamo
        file_put_contents('reclamos.txt', $reclamo_json, FILE_APPEND);
      }
      ?>
    </section>
   
  </body>
  <?php include 'footer.php'; ?>
</html>
