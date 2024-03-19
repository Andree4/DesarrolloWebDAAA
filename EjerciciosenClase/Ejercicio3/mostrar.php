<?php
include 'cola.php';
session_start();
if (!isset ($_SESSION['cola'])) {
    echo "La cola está vacía";
} else {
    $valor = $_SESSION['cola']->mostrar();
    $valor = implode(", ", $valor);
    echo "Cola: " . $valor;
}
?>
<meta http-equiv="refresh" content="2; url=MenuCola.html">