<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id_criptomoneda = intval($_GET['id']);
    $precios = obtenerPreciosPorCriptomoneda($id_criptomoneda);
    echo json_encode($precios);
}
?>