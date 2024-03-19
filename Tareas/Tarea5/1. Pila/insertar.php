<?php
require_once 'pila.php'; // Incluye el archivo que define la clase Pila
session_start();

if (!isset ($_SESSION['pila'])) {
    $_SESSION['pila'] = new Pila();
}

$pila = $_SESSION['pila'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset ($_POST['elemento'])) {
    $elemento = $_POST['elemento'];
    $pila->insertar($elemento);
    echo 'Elemento insertado: ', $elemento;
}
header('Refresh: 1;url=MenuPila.php');
