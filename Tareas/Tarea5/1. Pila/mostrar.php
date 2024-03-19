<?php
require_once 'pila.php'; // Incluye el archivo que define la clase Pila
session_start();

if (!isset ($_SESSION['pila'])) {
    $_SESSION['pila'] = new Pila();
}

$pila = $_SESSION['pila'];
$elementosPila = $pila->mostrar();

if (!empty ($elementosPila)) {
    $elementosPila = implode(", ", $elementosPila);
    echo "Elementos de la pila: $elementosPila.";
} else {
    echo "La pila está vacía.";
}
header('Refresh: 2;url=MenuPila.php');
