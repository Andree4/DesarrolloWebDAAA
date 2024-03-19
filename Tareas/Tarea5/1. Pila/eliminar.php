<?php
require_once 'pila.php'; // Incluye el archivo que define la clase Pila
session_start();

if (!isset ($_SESSION['pila'])) {
    $_SESSION['pila'] = new Pila();
}

$pila = $_SESSION['pila'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pila->eliminar();
    echo "Elemento eliminado.";
}
header('Refresh: 1; url=MenuPila.php');
exit();
