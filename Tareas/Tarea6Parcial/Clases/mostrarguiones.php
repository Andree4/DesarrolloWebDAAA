<?php
include 'utiles.php';
$cadena = $_POST['cadena'];
$guiones = $_POST['guiones'];
$utiles = new Utiles($cadena);
$resultado = $utiles->aumentarguiones($guiones);

echo $resultado;