<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
function conectarBaseDeDatos()
{
  $servername = "172.93.110.184:3535";
  $username = "tallerweb";
  $password = "tallerweb";
  $dbname = "TALLERWEB";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
  }

  return $conn;
}

function validarDatos($data)
{
  if (is_null($data)) {
    return null;
  }
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/* register */
function registrarUsuario($username, $email, $password)
{
  $conn = conectarBaseDeDatos();

  $sql = "INSERT INTO usuarios (username, email, password) VALUES (?, ?, ?)";

  $stmt = $conn->prepare($sql);

  if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
  }

  // hash
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $stmt->bind_param("sss", $username, $email, $hashed_password);

  if ($stmt->execute()) {
    $stmt->close();
    $conn->close();
    return true;
  } else {
    echo "Error: " . $stmt->error;
    $stmt->close();
    $conn->close();
    return false;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['form_id']) && $_POST['form_id'] === 'registerForm') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password !== $confirm_password) {
      echo "Las contraseñas no coinciden.";
      exit;
    }

    if (registrarUsuario($username, $email, $password)) {
      header("Location: index.php");
      exit;
    }
  }
}

/* login */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['form_id']) && $_POST['form_id'] === 'loginForm') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar las credenciales del usuario
    $user = login($email, $password);

    if ($user) {
      // Iniciar sesión y guardar los datos del usuario en variables de sesión
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];

      // Redirigir al usuario a la página deseada después de iniciar sesión
      header("Location: index.php");
      exit;
    } else {
      echo "Correo o contraseña incorrectos.";
    }
  }
}

// Función para verificar las credenciales del usuario
function login($email, $password)
{
  $conn = conectarBaseDeDatos();

  $sql = "SELECT * FROM usuarios WHERE email = ?";
  $stmt = $conn->prepare($sql);

  if ($stmt === false) {
    die("Error en la preparación de la consulta: " . $conn->error);
  }

  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
      $stmt->close();
      $conn->close();
      return $user;
    }
  }

  $stmt->close();
  $conn->close();
  return null;
}

/* logout */
function cerrarSesion()
{
  session_unset();
  session_destroy();
}


function insertarCriptomoneda($name, $network, $creator, $market_cap, $description, $enabled)
{
  $conn = conectarBaseDeDatos();

  $sql = "INSERT INTO criptomonedas (name, network, creator, market_cap, description, enabled) VALUES (?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssi", $name, $network, $creator, $market_cap, $description, $enabled);

  if ($stmt->execute()) {
    echo "Nueva criptomoneda añadida exitosamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $stmt->close();
  $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_crypto'])) {
  $name = validarDatos($_POST['name']);
  $network = validarDatos($_POST['network']);
  $creator = validarDatos($_POST['creator']);
  $market_cap = validarDatos($_POST['market_cap']);
  $description = validarDatos($_POST['description']);
  $enabled = isset($_POST['enabled']) ? 1 : 0;

  insertarCriptomoneda($name, $network, $creator, $market_cap, $description, $enabled);
  header("Location: mercados.php");
  exit();
}
function obtenerCriptomonedas()
{
  $conn = conectarBaseDeDatos();
  $sql = "SELECT * FROM criptomonedas WHERE enabled = 1"; //Solo habilitades xD
  $result = $conn->query($sql);

  $criptomonedas = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $criptomonedas[] = $row;
    }
  }

  $conn->close();
  return $criptomonedas;
}

function obtenerCriptomonedasOptions()
{
  $conn = conectarBaseDeDatos();

  $sql = "SELECT id, nombre FROM criptomonedas";
  $result = $conn->query($sql);

  $options = "";

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $options .= '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['nombre']) . '</option>';
    }
  } else {
    $options = '<option value="" disabled selected>No hay criptomonedas disponibles</option>';
  }

  $conn->close();

  return $options;
}

//PRECIOS DE CRIPTO
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_price'])) {

  $id_criptomoneda = validarDatos($_POST['crypto_price']);
  $precio = validarDatos($_POST['price']);
  $fecha = validarDatos($_POST['date_picker']);

  $fecha = date('Y-m-d', strtotime($fecha));

  insertarPrecioCriptomoneda($id_criptomoneda, $precio, $fecha);
  header("Location: mercados.php");
  exit();
}

function insertarPrecioCriptomoneda($id_criptomoneda, $precio, $fecha)
{
  $conn = conectarBaseDeDatos();

  $timestamp = strtotime($fecha);

  $sql = "INSERT INTO precios_criptomonedas (id_criptomoneda, precio, fecha) VALUES (?, ?, FROM_UNIXTIME(?))";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ids", $id_criptomoneda, $precio, $timestamp);

  if ($stmt->execute()) {
    echo "Precio de criptomoneda establecido correctamente.";
  } else {
    echo "Error al establecer el precio de criptomoneda: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
  header("Location: mercados.php");
  exit();
}

function obtenerUltimosPrecios($id_criptomoneda, $limite = 5)
{
  $conn = conectarBaseDeDatos();

  $sql = "SELECT fecha, precio FROM precios_criptomonedas WHERE id_criptomoneda = ? ORDER BY fecha DESC LIMIT ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ii", $id_criptomoneda, $limite);
  $stmt->execute();
  $result = $stmt->get_result();

  $precios = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $precios[] = $row;
    }
  }

  $stmt->close();
  $conn->close();

  return $precios;
}

function obtenerPreciosPorCriptomoneda($id_criptomoneda)
{
  $conn = conectarBaseDeDatos();

  $sql = "SELECT id, precio, fecha FROM precios_criptomonedas WHERE id_criptomoneda = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id_criptomoneda);
  $stmt->execute();
  $result = $stmt->get_result();

  $precios = [];
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $precios[] = $row;
    }
  }

  $stmt->close();
  $conn->close();

  return $precios;
}

//UPDATE SSSDS

function actualizarCriptomoneda($id, $name, $network, $creator, $market_cap, $description, $enabled)
{
  $conn = conectarBaseDeDatos();

  // Obtener los valores actuales de la criptomoneda
  $sql = "SELECT * FROM criptomonedas WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows == 0) {
    echo "No se encontró ninguna criptomoneda con el ID proporcionado.";
    return;
  }

  $cripto_actual = $result->fetch_assoc();
  $stmt->close();

  // Usar los valores actuales si no se proporcionaron nuevos
  $name = !empty($name) ? $name : $cripto_actual['name'];
  $network = !empty($network) ? $network : $cripto_actual['network'];
  $creator = !empty($creator) ? $creator : $cripto_actual['creator'];
  $market_cap = !empty($market_cap) ? $market_cap : $cripto_actual['market_cap'];
  $description = !empty($description) ? $description : $cripto_actual['description'];
  $enabled = isset($enabled) ? $enabled : $cripto_actual['enabled'];

  // Actualizar la criptomoneda
  $sql = "UPDATE criptomonedas SET name = ?, network = ?, creator = ?, market_cap = ?, description = ?, enabled = ? WHERE
id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssii", $name, $network, $creator, $market_cap, $description, $enabled, $id);

  if ($stmt->execute()) {
    echo "Criptomoneda actualizada exitosamente.";
  } else {
    echo "Error al actualizar la criptomoneda: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_crypto'])) {
  $id = validarDatos($_POST['edit_crypto']);
  $name = validarDatos($_POST['edit_name']);
  $network = validarDatos($_POST['edit_network']);
  $creator = validarDatos($_POST['edit_creator']);
  $market_cap = validarDatos($_POST['edit_market_cap']);
  $description = validarDatos($_POST['edit_description']);
  $enabled = isset($_POST['edit_enabled']) ? 1 : 0;

  actualizarCriptomoneda($id, $name, $network, $creator, $market_cap, $description, $enabled);
  header("Location: mercados.php");
  exit();
}


//DELTEEEE
function eliminarCriptomoneda($id)
{
  $conn = conectarBaseDeDatos();

  $sql = "DELETE FROM criptomonedas WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);

  if ($stmt->execute()) {
    echo "Criptomoneda eliminada exitosamente.";
  } else {
    echo "Error al eliminar la criptomoneda: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
  header("Location: mercados.php");
  exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_crypto'])) {
  $id = validarDatos($_POST['delete_crypto']);
  eliminarCriptomoneda($id);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_crypto_price'])) {
  $idPrecio = validarDatos($_POST['delete_price_crypto']);
  eliminarPrecioCriptomoneda($idPrecio);

  header("Location: mercados.php");
  exit();
}

function eliminarPrecioCriptomoneda($idPrecio)
{
  $conn = conectarBaseDeDatos();

  $sql = "DELETE FROM precios_criptomonedas WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $idPrecio);

  if ($stmt->execute()) {
    echo "Precio eliminado exitosamente.";
  } else {
    echo "Error al eliminar el precio: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
?>