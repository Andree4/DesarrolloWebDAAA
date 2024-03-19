<?php
include 'cola.php';
session_start();
if (!isset ($_SESSION['cola'])) {
    $_SESSION['cola'] = new Cola();
}
$valor = $_POST['valor'];
$_SESSION['cola']->insertar($valor);
header('Location: MenuCola.html');