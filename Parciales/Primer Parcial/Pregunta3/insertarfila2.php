<?php
include 'estante.php';
$estant = new estante();
$libro = $_POST['Libro'];
$estant->InsertarFila2($libro);
?>

<meta http-equiv="refresh" content="0; url=menu.html">