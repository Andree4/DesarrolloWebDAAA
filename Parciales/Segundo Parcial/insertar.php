<?php
include ("conexion.php");

$Imagen = $_POST["imagen"];
$Titulo = $_POST["titulo"];
$Autor = $_POST["autor"];
$Editorial = $_POST["editorial"];
$Anio = $_POST["anio"];

$sql = "INSERT INTO libros (imagen, titulo, autor, ideditorial, anio ) 
values ('$Imagen', '$Titulo', '$Editorial', $Autor, $Anio)";

//echo $sql;
$result = $con->query($sql);
if (!$result) {
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>