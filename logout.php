<?php
// Incluir connect.php para asegurar que la función esté disponible
include 'connect.php';

// Llama a la función para cerrar sesión
cerrarSesion();

// Redirige al usuario a otra página después del cierre de sesión, por ejemplo:
header("Location: index.php");
exit;
?>