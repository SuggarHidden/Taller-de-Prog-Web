<?php
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
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
}
function obtenerCriptomonedas()
{
  $conn = conectarBaseDeDatos();
  $sql = "SELECT * FROM criptomonedas";
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

//PRECIOS DE CRITO
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit_price'])) {

  $id_criptomoneda = validarDatos($_POST['crypto_price']);
  $precio = validarDatos($_POST['price']);
  $fecha = validarDatos($_POST['date_picker']);

  $fecha = date('Y-m-d', strtotime($fecha));

  insertarPrecioCriptomoneda($id_criptomoneda, $precio, $fecha);
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
}

?>