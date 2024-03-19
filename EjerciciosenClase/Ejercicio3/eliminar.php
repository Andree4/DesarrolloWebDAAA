<?php
include 'cola.php';
session_start();
if (!isset ($_SESSION['cola'])) {
    echo "La cola está vacía";
} else {
    $valor = $_SESSION['cola']->eliminar();
    echo "Elemento eliminado: " . $valor;
}
?>
<meta http-equiv="refresh" content="1; url=MenuCola.html">