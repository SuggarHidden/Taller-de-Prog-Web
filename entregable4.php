<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" type="text/css" href="./styles/global.css" />
  <link rel="stylesheet" type="text/css" href="./styles/mercados.css" />
  <link rel="stylesheet" type="text/css" href="./styles/entregable4.css" />
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
    <h2>Cosas que pidieron y no queremos hacer  pt. 4</h2>
  </section>

    <section id="credito">
      <h3>2. Simulador de Pago Mensual</h3>
      <form action="" method="post">
        <label for="monto">Monto de la compra:</label>
        <input type="number" id="monto" name="monto"
          value="<?php echo isset($_POST['monto']) ? $_POST['monto'] : ''; ?>" required><br><br>

        <label for="meses">Cantidad de meses a fraccionar:</label>
        <input type="number" id="meses" name="meses"
          value="<?php echo isset($_POST['meses']) ? $_POST['meses'] : ''; ?>" required><br><br>

        <label for="tarjeta">Tipo de tarjeta:</label>
        <select id="tarjeta" name="tarjeta" required>
          <option value="" disabled selected>Seleccione una tarjeta</option>
          <option value="visa" <?php echo (isset($_POST['tarjeta']) && $_POST['tarjeta'] == 'visa') ? 'selected' : ''; ?>>
            Visa</option>
          <option value="mastercard" <?php echo (isset($_POST['tarjeta']) && $_POST['tarjeta'] == 'mastercard') ? 'selected' : ''; ?>>MasterCard</option>
          <option value="amex" <?php echo (isset($_POST['tarjeta']) && $_POST['tarjeta'] == 'amex') ? 'selected' : ''; ?>>
            American Express</option>
        </select><br><br>

        <input type="submit" value="Calcular">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['monto']) && isset($_POST['meses']) && isset($_POST['tarjeta'])) {
        $monto = floatval($_POST['monto']);
        $meses = intval($_POST['meses']);
        $tarjeta = $_POST['tarjeta'];

        // AMO LOS OBJETOS SIIIIII ESTO ES UN OBJETO? NI IDEA PHP YA MURIO
        $tasas_interes = [
          'visa' => 0.03,
          'mastercard' => 0.035,
          'amex' => 0.04
        ];

        $tasa_interes = $tasas_interes[$tarjeta];

        // LA FORMULA RARA
        $cuota_mensual = $monto * $tasa_interes / (1 - pow(1 + $tasa_interes, -$meses));

        // ODIO LAS TALBAS
        echo "<h4>Resultados</h4>";
        echo "<table border='1'>
                <tr>
                    <th>Mes</th>
                    <th>Cuota mensual</th>
                    <th>Pago del interés</th>
                    <th>Pago del capital</th>
                    <th>Deuda</th>
                </tr>";

        // ESTO ES EL OUTPUT
        $deuda = $monto;
        for ($mes = 1; $mes <= $meses; $mes++) {
          $pago_interes = $deuda * $tasa_interes;
          $pago_capital = $cuota_mensual - $pago_interes;
          $deuda -= $pago_capital;

          echo "<tr>
                    <td>$mes</td>
                    <td>" . number_format($cuota_mensual, 2) . "</td>
                    <td>" . number_format($pago_interes, 2) . "</td>
                    <td>" . number_format($pago_capital, 2) . "</td>
                    <td>" . number_format(max($deuda, 0), 2) . "</td>
                  </tr>";
        }

        echo "</table>";
      }
      ?>
    </section>
    <!-- DIOS TE ODIO UTP -->
    <section id="num_aleatorios">
      <h3>3. Generar Números Aleatorios</h3>
      <form action="" method="post">
        <label for="cantidad">Cantidad de Números (N):</label>
        <input type="number" id="cantidad" name="cantidad"
          value="<?php echo isset($_POST['cantidad']) ? $_POST['cantidad'] : ''; ?>" required><br><br>
        <input type="submit" value="Generar">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cantidad'])) {
        // ES UN MATH RANDOM PRACTICAMENTE NO HAY MAS LOGICA
        function generar_numero_aleatorio()
        {
          return rand(300, 2000);
        }

        // ESTO ES OBVIO QUE HACE
        function suma_digitos($numero)
        {
          $suma = 0;
          while ($numero > 0) {
            $suma += $numero % 10;
            $numero = intval($numero / 10);
          }
          return $suma;
        }

        // xD?
        function es_par_o_impar($numero)
        {
          return ($numero % 2 == 0) ? "Par" : "Impar";
        }

        $cantidad = intval($_POST['cantidad']);

        // ESTO LA VERDAD NI SE COMO FUNCIONA PERO CREO QUE ESTA BIEN
        echo "<h4>Resultados</h4>";
        echo "<table border='1'>
                    <tr>
                        <th>Número</th>
                        <th>Suma de Dígitos</th>
                        <th>Descripción</th>
                    </tr>";

        for ($i = 1; $i <= $cantidad; $i++) {
          $numero = generar_numero_aleatorio();
          $suma = suma_digitos($numero);
          $descripcion = es_par_o_impar($suma);

          echo "<tr>
                        <td>$numero</td>
                        <td>$suma</td>
                        <td>$descripcion</td>
                      </tr>";
        }

        echo "</table>";
      }
      ?>
    </section>
    <!-- enserio no me pagan lo suficiente para estudiar en la utp esto es el MCD y EL MCM SE MANEJA POR ID CADA SECTION -->
    <section id="mcm&mcd">
      <h3>4. MCD y MCM</h3>
      <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1" value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>"
          required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2" value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>"
          required><br><br>
        <label for="num3">Número 3:</label>
        <input type="number" id="num3" name="num3" value="<?php echo isset($_POST['num3']) ? $_POST['num3'] : ''; ?>"
          required><br><br>
        <input type="submit" value="Calcular">
      </form>

      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        function mcd($a, $b)
        {
          while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
          }
          return $a;
        }
        function mcm($a, $b)
        {
          return ($a * $b) / mcd($a, $b);
        }

        //DATOS DATOS DATOS
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $num3 = intval($_POST['num3']);

        $mcd_total = mcd(mcd($num1, $num2), $num3);
        $mcm_total = mcm(mcm($num1, $num2), $num3);

        // OUT PUT :o
        echo "<h2>Resultados</h2>";
        echo "<p>El MCD de $num1, $num2 y $num3 es: $mcd_total</p>";
        echo "<p>El MCM de $num1, $num2 y $num3 es: $mcm_total</p>";
      }
      ?>
    </section>
  </div>
  <script src="main.js"></script>
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
          <input type="email" placeholder="correo" id="footer-email" onkeydown="footer(event)" />
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
          <a href="./reclamos.php">Libro de reclamaciones</a><br />
          <a href="./lista-reclamos.php">Historial de reclamos</a><br />
          <a href="./entregable4.php">Entregable 4</a><br />
        </nav>
      </td>
    </tr>
  </table>
</footer>

</html>